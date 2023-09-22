<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Actividade;
use App\Models\Falla;
use App\Models\Tallere;
use App\Models\Camione;
use App\Models\Almacene;
use App\Models\Viaje;
use App\Models\Trazabilidad;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */
class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:servicios.index')->only('index');
        $this->middleware('can:servicios.create')->only('create', 'store');
        $this->middleware('can:servicios.show')->only('show');
        $this->middleware('can:servicios.edit')->only('edit', 'update');
        $this->middleware('can:servicios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        if (!$user) {
            // El usuario no está autenticado, redirigir o mostrar un mensaje de error.
            return "No estás autenticado.";
        }
        
        $conductorEmail = $user->email;
        
        // Verificar si el correo del usuario coincide con el correo en la tabla de conductores
        $conductor = DB::table('conductores')
            ->where('cor_ele_con', $conductorEmail)
            ->first();

        if ($conductor) {
            // El usuario es un conductor, obtener los servicios asociados a su camión.
            $camion = Camione::where('con_cam', $conductor->dni_con)->first();

            if ($camion) {
                $servicios = $camion->servicios()->paginate(10);
            } else {
                $servicios = collect(); // No hay camión asociado, devolver una colección vacía.
            }
        } else {
            // El usuario no es un conductor, obtener todos los servicios.
            $servicios = Servicio::paginate(10);
        }
        
        // Definimos el mapeo de estados a colores
        $statusColors = [
            'No comenzada' => 'badge-dark',
            'En curso' => 'badge-info',
            'Aplazada' => 'badge-warning',
            'Cancelada' => 'badge-danger',
            'Completada' => 'badge-success',
        ];

        return view('servicio.index', compact('servicios', 'statusColors'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
    
        if (!$user) {
            // El usuario no está autenticado, redirigir o mostrar un mensaje de error.
            return "No estás autenticado.";
        }
    
        $conductorEmail = $user->email;
    
        // Verificar si el correo del usuario coincide con el correo en la tabla de conductores
        $conductor = DB::table('conductores')
            ->where('cor_ele_con', $conductorEmail)
            ->first();
    
        $servicio = new Servicio();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        $fallasDisponibles = Falla::pluck('desc_fal', 'cod_fal');
        $fallasRegistrados = $servicio->pluck('fal_ser');
        $fallasFiltrados = $fallasDisponibles->except($fallasRegistrados);
        $almacenes = Almacene::where('est_alm', 'disponible')->with('componente')->get();
    
        $camion = null;
        $talleres = [];
    
        if ($conductor) {
            // Verificar si el usuario es conductor y obtener el viaje en progreso asociado.
            $camion = Camione::where('con_cam', $conductor->dni_con)->first();
    
            if ($camion) {
                $viaje = $camion->viajes()
                    ->where('est_via', 'en progreso')
                    ->latest()
                    ->first();
    
                if ($viaje) {
                    // Obtener la ruta asociada al viaje actual.
                    $rutaAsociada = $viaje->ruta;
    
                    // Obtener los talleres asociados a la ruta.
                    $talleres = $rutaAsociada->talleres->pluck('nom_tal', 'nit_tal');
                }
            }
        }
    
        // Obtener todos los talleres si el usuario no es conductor.
        if (!$conductor) {
            $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        }
    
        // Obtener todos los camiones, independientemente de si el usuario es conductor o no.
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::where('est_alm', 'disponible')->with('componente')->get();
        return view('servicio.create', compact('servicio', 'sistemas', 'actividades', 'fallasFiltrados', 'talleres', 'camiones', 'almacenes', 'camion'));
    }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cod_ser = $request->input('cod_ser');
        $primerosCuatroDigitos = substr($cod_ser, 0, 4);
    
        // Verificar si existe un registro con los mismos 4 primeros dígitos, estado no completado y misma placa de camión
        $registroExistente = Servicio::where('cod_ser', 'LIKE', $primerosCuatroDigitos . '%')
            ->where('est_ser', '<>', 'Completada')
            ->where('cam_ser', $request->input('cam_ser'))
            ->first();

        if ($registroExistente) {
            return redirect()->route('servicios.index')
                ->with('error', '<div class="alert alert-info alert-dismissible">
                                    <h5><i class="fas fa-info"></i> Alerta!</h5>
                                    No se puede crear un nuevo registro, ya que existe un servicio previo sin completar con el mismo camión.
                                </div>');
        }

        $estadoServicio = $request->input('est_ser');

        if ($estadoServicio === 'No comenzada' || $estadoServicio === 'En curso') {
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'en mantenimiento';
            $camione->save();
        } elseif ($estadoServicio === 'Completada') {
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'disponible';
            $camione->save();
        } else{
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'fuera de servicio';
            $camione->save();
        }

        if ($request->has('fal_ser') && $request->get('fal_ser') !== null) {
            // Obtener el ID de la falla seleccionada
            $fallaId = $request->get('fal_ser');
            
            // Buscar la falla en la base de datos
            $falla = Falla::find($fallaId);
            
            // Si se encontró la falla en la base de datos
            if ($falla) {
                // Actualizar el estado de la falla a "En proceso de reparación"
                $falla->est_act_fal = 'proceso';
                $falla->save();
            }
        }

        // Obtén el valor de alm_ser si está presente en la solicitud
        $componenteSeleccionado = $request->input('alm_ser', null);

        // Obtén el valor de can_ser si está presente en la solicitud
        $cantidadUtilizada = $request->input('can_ser', null);

        if ($componenteSeleccionado !== null && $cantidadUtilizada !== null) {
            // Actualizar la cantidad en la tabla almacenes
            $almacene = Almacene::findOrFail($componenteSeleccionado);
            $almacene->can_alm -= $cantidadUtilizada;
            $almacene->save();
        }

        request()->validate(Servicio::$rules);
        $servicio = Servicio::create($request->all());

        return redirect()->route('servicios.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Servicio creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function show($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);

        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        // Verificar si $servicio->falla no es nulo antes de acceder a desc_fal
        $fallasFiltrados = $servicio->falla ? $servicio->falla->desc_fal : null;
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::where('est_alm', 'disponible')->with('componente')->get();
        return view('servicio.edit', compact('servicio', 'sistemas', 'actividades', 'fallasFiltrados', 'talleres', 'camiones', 'almacenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicio $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate(Arr::except(Servicio::$rules, 'cod_ser'));
        $estadoServicio = $request->input('est_ser');

        if ($estadoServicio === 'No comenzada' || $estadoServicio === 'En curso') {
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'en mantenimiento';
            $camione->save();
        } elseif ($estadoServicio === 'Completada') {

            if ($servicio->fal_ser) {
                $falla = Falla::findOrFail($servicio->fal_ser);
                $falla->est_act_fal = 'reparada';
                $falla->save();

                $camion = Camione::findOrFail($servicio->cam_ser);

                // Buscar el viaje asociado al camión
                $viaje = Viaje::where('cam_via', $camion->pla_cam)->first();
    
                if ($viaje && $viaje->est_via === 'inactivo') {
                    // Buscar el registro más reciente en la tabla de trazabilidad
                    $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)
                    ->orderByDesc('dat_pro_tra')
                    ->orderByDesc('tim_pro_tra')
                    ->orderByDesc('dat_enp_tra')
                    ->orderByDesc('tim_enp_tra')
                    ->first();

                if ($trazabilidad) {
                    // Comparar las fechas y horas más recientes
                    $fechaHoraProg = $trazabilidad->dat_pro_tra . ' ' . $trazabilidad->tim_pro_tra;
                    $fechaHoraEnProg = $trazabilidad->dat_enp_tra . ' ' . $trazabilidad->tim_enp_tra;

                        if ($fechaHoraProg > $fechaHoraEnProg) {
                            // Cambiar el estado del viaje a "programado"
                            $viaje->est_via = 'programado';
                        } else {
                            // Cambiar el estado del viaje a "en progreso"
                            $viaje->est_via = 'en progreso';
                        }
                            $viaje->save();
                        }
                    $camion->est_cam = 'en viaje';
                    $camion->save();
                    
                    $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)->first();
                    if ($trazabilidad && $trazabilidad->ini_ina_tra) {
                        $inicioConteo = new DateTime($trazabilidad->ini_ina_tra); // Convierte a objeto DateTime

                        $ahora = new DateTime(); // Obtiene la fecha y hora actual

                        $intervalo = $inicioConteo->diff($ahora); // Calcula la diferencia de tiempo

                        // Calcula la diferencia en horas
                        $horas = $intervalo->h + ($intervalo->days * 24);

                        // Formatea la diferencia en horas en el formato de tiempo
                        $tiempoTranscurrido = sprintf('%02d:%02d:%02d', $horas, $intervalo->i, $intervalo->s);

                        // Guarda el tiempo transcurrido en el campo fin_ina_tra
                        $trazabilidad->fin_ina_tra = $tiempoTranscurrido;
                        $trazabilidad->save();
                    }
                }
                }else{
                    $camione = Camione::findOrFail($request->input('cam_ser'));
                    $camione->est_cam = 'disponible';
                    $camione->save();
            }
        } else{
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'fuera de servicio';
            $camione->save();
        }

        if ($request->has('est_ser') && $request->est_ser === 'Completada') {
            
        }
    
        // Actualizar el servicio
        $servicio->update($request->all());
        // Lógica para obtener el servicio existente
        $cantidadAnterior = $servicio->can_ser;
    // Lógica para actualizar la cantidad en la tabla almacenes
      $componenteSeleccionado = $request->input('alm_ser');
      $cantidadNueva = $request->input('can_ser');
  
      // Calcular la diferencia entre la cantidad anterior y la nueva
      $diferencia = $cantidadNueva - $cantidadAnterior;
  
      // Actualizar la cantidad en la tabla almacenes solo si hay una diferencia
      if ($diferencia !== 0) {
          $almacene = Almacene::findOrFail($componenteSeleccionado);
  
          // Realizar la operación según la diferencia
          if ($diferencia > 0) {
              $almacene->can_alm -= $diferencia;
          } else {
              $almacene->can_alm += abs($diferencia);
          }
  
          $almacene->save();
      }


        return redirect()->route('servicios.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Servicio actualizado exitosamente.
                                </div>');
    }

    /**
     * @param string $cod_ser
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_ser)
    {
        try {
            // Intenta eliminar el registro del camión
            $servicio = Servicio::find($cod_ser);
            if (!$servicio) {
                return redirect()->route('servicios.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El servicio no existe.
                                    </div>');
            }
    
            $servicio->delete();
    
            return redirect()->route('servicios.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Servicio eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el servicio: ' . $e->getMessage();
            }
    
            return redirect()->route('servicios.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
 
    public function actualizarEstado(Request $request, $codigoServicio)
    {
        // Valida el nuevo estado (opcional, si es necesario)
        $request->validate([
            'estado' => 'required|in:No comenzada,En curso,Aplazada,Cancelada,Completada'
        ]);

        // Encuentra el servicio por el código y actualiza su estado
        $servicio = Servicio::find($codigoServicio);
        $servicio->est_ser = $request->input('estado');
        $servicio->save();

        // Devuelve una respuesta JSON (opcional, para informar el resultado)
        return response()->json(['success' => true, 'message' => 'Estado actualizado exitosamente']);
    }
}
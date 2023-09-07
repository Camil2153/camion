<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Falla;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Camione;
use App\Models\Ruta;
use App\Models\Viaje;
use App\Models\Trazabilidad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class FallaController
 * @package App\Http\Controllers
 */
class FallaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:fallas.index')->only('index');
        $this->middleware('can:fallas.create')->only('create', 'store');
        $this->middleware('can:fallas.show')->only('show');
        $this->middleware('can:fallas.edit')->only('edit', 'update');
        $this->middleware('can:fallas.destroy')->only('destroy');
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
            // El usuario es un conductor, obtener las fallas asociadas a su camión.
            $camion = Camione::where('con_cam', $conductor->dni_con)->first();
    
            if ($camion) {
                $fallas = $camion->fallas()->paginate();
            } else {
                $fallas = collect(); // No hay camión asociado, devolver una colección vacía.
            }
        } else {
            // El usuario no es un conductor, obtener todas las fallas.
            $fallas = Falla::paginate();
        }
    
        return view('falla.index', compact('fallas'))
            ->with('i', $fallas->isEmpty() ? 0 : (request()->input('page', 1) - 1) * $fallas->perPage());    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $falla = new Falla();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('falla.create', compact('falla', 'sistemas', 'camiones', 'rutas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         // Verificar si el estado del camión seleccionado es "en viaje"
    $camion = Camione::where('pla_cam', $request->input('cam_fal'))->first();
    if ($camion && $camion->est_cam == 'en viaje') {
        // Obtener el viaje asociado al camión
        $viaje = Viaje::where('cam_via', $camion->pla_cam)->first();
        if ($viaje) {

            $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)->first();
            $trazabilidad->ini_ina_tra = now(); // Almacena la fecha y hora de inicio del conteo
            $trazabilidad->save();

            // Cambiar el estado del viaje a "inactivo"
            $viaje->est_via = 'inactivo';
            $camion->est_cam = 'inactivo';
            $viaje->save();
            $camion->save();
        }
    }

        if ($request->has('servicio_id') && $request->get('servicio_id') !== null) {
            // Obtener el ID del servicio al que se está asignando la falla
            $servicioId = $request->get('servicio_id');
            
            // Buscar el servicio en la base de datos
            $servicio = Servicio::find($servicioId);
            
            // Si se encontró el servicio en la base de datos
            if ($servicio) {
                // Actualizar el estado de la falla a "En proceso de reparación"
                $this->est_act_fal = 'proceso';
                $this->save();
            }
        }

        $request->merge(['est_act_fal' => 'pendiente']);
        request()->validate(Falla::$rules);
        $falla = Falla::create($request->all());

        return redirect()->route('fallas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Falla creada exitosamente.
                                </div>');
    }
    /**
     * Display the specified resource.
     *
     * @param  string $cod_fal
     * @return \Illuminate\Http\Response
     */
    public function show($cod_fal)
    {
        $falla = Falla::find($cod_fal);

        return view('falla.show', compact('falla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_fal
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_fal)
    {
        $falla = Falla::find($cod_fal);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('falla.edit', compact('falla', 'sistemas', 'camiones', 'rutas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Falla $falla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, falla $falla)
    {
        // Validar los campos del formulario, excepto 'cod_fal'
        $request->validate(Arr::except(falla::$rules, 'cod_fal'));
    
        // Verificar si el valor de 'cod_fal' ha cambiado
        if ($request->input('cod_fal') !== $falla->cod_fal) {
            // Validar 'cod_fal' como único en la tabla 'fallas'
            $request->validate([
                'cod_fal' => 'required|unique:fallas,cod_fal',
            ]);
        }
    
        // Actualizar los atributos del modelo falla
        $falla->update($request->all());
        $falla->update($request->except('est_act_fal'));
        return redirect()->route('fallas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Falla actualizada exitosamente.
                                </div>');
    }

    /**
     * @param string $cod_fal
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_fal)
    {
        try {
            // Intenta eliminar el registro del camión
            $falla = Falla::find($cod_fal);
            if (!$falla) {
                return redirect()->route('fallas.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      La falla no existe.
                                    </div>');
            }
    
            $falla->delete();
    
            return redirect()->route('fallas.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Falla eliminada exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar la falla: ' . $e->getMessage();
            }
    
            return redirect()->route('fallas.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}
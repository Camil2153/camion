<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Camione;
use Illuminate\Http\Request;
use App\Models\Conductore;

/**
 * Class CamioneController
 * @package App\Http\Controllers
 */
class CamioneController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:camiones.index')->only('index');
        $this->middleware('can:camiones.create')->only('create', 'store');
        $this->middleware('can:camiones.show')->only('show');
        $this->middleware('can:camiones.edit')->only('edit', 'update');
        $this->middleware('can:camiones.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camiones = Camione::paginate(1000);

        return view('camione.index', compact('camiones'))
            ->with('i', (request()->input('page', 1) - 1) * $camiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $camione = new Camione();
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $conductoresDisponibles = Conductore::whereNotIn('dni_con', function ($query) {
            $query->select('con_cam')
                  ->from('camiones');
        })->pluck('nom_con', 'dni_con')->toArray();

        return view('camione.create', compact('camione', 'conductoresDisponibles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Camione::$rules);
        $request->merge(['est_cam' => 'disponible']);
        $camione = Camione::create($request->all());
        // Verificar si se ha asignado un conductor al camión
        if ($request->has('con_cam')) {
            $conductore = Conductore::where('dni_con', $request->input('con_cam'))->first();
            if ($conductore) {
                $conductore->update(['est_con' => 'asignado']);
            }
        }

        return redirect()->route('camiones.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Camion creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $pla_cam
     * @return \Illuminate\Http\Response
     */
    public function show($pla_cam)
    {
        $camione = Camione::find($pla_cam);

        return view('camione.show', compact('camione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $pla_cam
     * @return \Illuminate\Http\Response
     */
    public function edit($pla_cam)
    {
        $camione = Camione::find($pla_cam);
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $conductoresDisponibles = $camione->conductore->nom_con;

        return view('camione.edit', compact('camione','conductores', 'conductoresDisponibles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Camione $camione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, camione $camione)
    {
        // Validar los campos del formulario, excepto 'pla_cam'
        $request->validate(Arr::except(camione::$rules, 'pla_cam'));
    
        // Verificar si el valor de 'pla_cam' ha cambiado
        if ($request->input('pla_cam') !== $camione->pla_cam) {
            // Validar 'pla_cam' como único en la tabla 'camiones'
            $request->validate([
                'pla_cam' => 'required|unique:camiones,pla_cam',
            ]);
        }
                
        // Obtener el DNI del conductor asignado actualmente al camión
        $conductorActual = $camione->con_cam;

        // Verificar si se ha asignado un conductor al camión
        if ($request->has('con_cam')) {
            $nuevoConductorDni = $request->input('con_cam');

            // Si el conductor asignado cambió, actualizar el estado del conductor anterior
            if ($conductorActual !== $nuevoConductorDni) {
                $conductorAnterior = Conductore::where('dni_con', $conductorActual)->first();
                if ($conductorAnterior) {
                    $conductorAnterior->update(['est_con' => 'activo']);
                }
            }

            // Actualizar el estado del nuevo conductor a 'asignado'
            $nuevoConductor = Conductore::where('dni_con', $nuevoConductorDni)->first();
            if ($nuevoConductor) {
                $nuevoConductor->update(['est_con' => 'asignado']);
            }
        }
    
        // Actualizar los atributos del modelo camione
        $camione->update($request->all());
    
        return redirect()->route('camiones.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Camion actualizado exitosamente.
                                </div>');
    }

    /**
     * @param string $pla_cam
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($pla_cam)
    {
        try {
            // Intenta eliminar el registro del camión
            $camione = Camione::find($pla_cam);
            if (!$camione) {
                return redirect()->route('camiones.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El camión no existe.
                                    </div>');
            }
    
            if ($camione) {
                // Obtener el DNI del conductor asignado al camión antes de eliminarlo
                $conductorAsignado = $camione->con_cam;
        
                // Eliminar el camión
                $camione->delete();
        
                // Verificar si había un conductor asignado y actualizar su estado a 'activo'
                if ($conductorAsignado) {
                    $conductor = Conductore::where('dni_con', $conductorAsignado)->first();
                    if ($conductor) {
                        $conductor->update(['est_con' => 'activo']);
                    }
                }
            }
    
            return redirect()->route('camiones.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Camión eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el camión: ' . $e->getMessage();
            }
    
            return redirect()->route('camiones.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }    
}
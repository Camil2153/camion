<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Conductore;
use Illuminate\Http\Request;

/**
 * Class ConductoreController
 * @package App\Http\Controllers
 */
class ConductoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:conductores.index')->only('index');
        $this->middleware('can:conductores.create')->only('create', 'store');
        $this->middleware('can:conductores.show')->only('show');
        $this->middleware('can:conductores.edit')->only('edit', 'update');
        $this->middleware('can:conductores.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductore::paginate();

        return view('conductore.index', compact('conductores'))
            ->with('i', (request()->input('page', 1) - 1) * $conductores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductore = new Conductore();
        return view('conductore.create', compact('conductore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['est_con' => 'activo']);
        request()->validate(Conductore::$rules);

        $conductore = Conductore::create($request->all());
        
        return redirect()->route('conductores.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Conductor creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $dni_con
     * @return \Illuminate\Http\Response
     */
    public function show($dni_con)
    {
        $conductore = Conductore::where('dni_con', $dni_con)->first();

        if ($conductore) {
            return view('conductore.show', compact('conductore'));
        }

        return redirect()->route('conductores.index')
            ->with('error', '<div class="alert alert-danger alert-dismissible">
                                <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                No se encontró el conductor.
                            </div>');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $dni_con
     * @return \Illuminate\Http\Response
     */
    public function edit($dni_con)
    {
        $conductore = Conductore::where('dni_con', $dni_con)->first();

        if ($conductore) {
            return view('conductore.edit', compact('conductore'));
        }

        return redirect()->route('conductores.index')
            ->with('error', '<div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                    No se encontró el conductor.
                                </div>');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string $dni_con
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conductore $conductore)
    {
        // Validar los campos del formulario, excepto 'dni_con'
        $request->validate(Arr::except(conductore::$rules, 'dni_con'));
    
        // Verificar si el valor de 'dni_con' ha cambiado
        if ($request->input('dni_con') !== $conductore->dni_con) {
            // Validar 'dni_con' como único en la tabla 'conductores'
            $request->validate([
                'dni_con' => 'required|unique:conductores,dni_con',
            ]);
        }
    
        // Actualizar los atributos del modelo conductore
        $conductore->update($request->all());
    
        return redirect()->route('conductores.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Conductor actualizado exitosamente.
                                </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $dni_con
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni_con)
    {
        try {
            // Intenta eliminar el registro del camión
            $conductore = Conductore::find($dni_con);
            if (!$conductore) {
                return redirect()->route('conductores.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El conductor no existe.
                                    </div>');
            }
    
            $conductore->delete();
    
            return redirect()->route('conductores.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Conductor eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el conductor: ' . $e->getMessage();
            }
    
            return redirect()->route('conductores.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}

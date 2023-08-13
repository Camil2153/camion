<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Componente;
use Illuminate\Http\Request;
use App\Models\Sistema;

/**
 * Class ComponenteController
 * @package App\Http\Controllers
 */
class ComponenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:componentes.index')->only('index');
        $this->middleware('can:componentes.create')->only('create', 'store');
        $this->middleware('can:componentes.show')->only('show');
        $this->middleware('can:componentes.edit')->only('edit', 'update');
        $this->middleware('can:componentes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componentes = Componente::paginate();

        return view('componente.index', compact('componentes'))
            ->with('i', (request()->input('page', 1) - 1) * $componentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $componente = new Componente();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        return view('componente.create', compact('componente', 'sistemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Componente::$rules);

        $componente = Componente::create($request->all());

        return redirect()->route('componentes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Componente creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $num_ser_com
     * @return \Illuminate\Http\Response
     */
    public function show($num_ser_com)
    {
        $componente = Componente::find($num_ser_com);

        return view('componente.show', compact('componente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $num_ser_com
     * @return \Illuminate\Http\Response
     */
    public function edit($num_ser_com)
    {
        $componente = Componente::find($num_ser_com);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        return view('componente.edit', compact('componente', 'sistemas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Componente $componente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, componente $componente)
    {
        // Validar los campos del formulario, excepto 'num_ser_com'
        $request->validate(Arr::except(componente::$rules, 'num_ser_com'));
    
        // Verificar si el valor de 'num_ser_com' ha cambiado
        if ($request->input('num_ser_com') !== $componente->num_ser_com) {
            // Validar 'num_ser_com' como único en la tabla 'componentes'
            $request->validate([
                'num_ser_com' => 'required|unique:componentes,num_ser_com',
            ]);
        }
    
        // Actualizar los atributos del modelo componente
        $componente->update($request->all());
    
        return redirect()->route('componentes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Componente actualizado existosamente.
                                </div>');
    }

    /**
     * @param string $num_ser_com
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($num_ser_com)
    {
        try {
            // Intenta eliminar el registro del camión
            $componente = Componente::find($num_ser_com);
            if (!$componente) {
                return redirect()->route('componentes.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El componente no existe.
                                    </div>');
            }
    
            $componente->delete();
    
            return redirect()->route('componentes.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Componente eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el componente: ' . $e->getMessage();
            }
    
            return redirect()->route('componentes.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}

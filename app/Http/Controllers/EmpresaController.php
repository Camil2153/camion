<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Empresa;
use Illuminate\Http\Request;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:empresas.index')->only('index');
        $this->middleware('can:empresas.create')->only('create', 'store');
        $this->middleware('can:empresas.show')->only('show');
        $this->middleware('can:empresas.edit')->only('edit', 'update');
        $this->middleware('can:empresas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::paginate(1000);

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresa::$rules);

        $empresa = Empresa::create($request->all());

        return redirect()->route('empresas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Empresa creada exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $nit_emp
     * @return \Illuminate\Http\Response
     */
    public function show($nit_emp)
    {
        $empresa = Empresa::find($nit_emp);

        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $nit_emp
     * @return \Illuminate\Http\Response
     */
    public function edit($nit_emp)
    {
        $empresa = Empresa::find($nit_emp);

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresa $empresa)
    {
        // Validar los campos del formulario, excepto 'nit_emp'
        $request->validate(Arr::except(empresa::$rules, 'nit_emp'));
    
        // Verificar si el valor de 'nit_emp' ha cambiado
        if ($request->input('nit_emp') !== $empresa->nit_emp) {
            // Validar 'nit_emp' como único en la tabla 'empresas'
            $request->validate([
                'nit_emp' => 'required|unique:empresas,nit_emp',
            ]);
        }
    
        // Actualizar los atributos del modelo empresa
        $empresa->update($request->all());
    
        return redirect()->route('empresas.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Empresa actualizada exitosamente.
                                </div>');
    }

    /**
     * @param string $nit_emp
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($nit_emp)
    {
        try {
            // Intenta eliminar el registro del camión
            $empresa = Empresa::find($nit_emp);
            if (!$empresa) {
                return redirect()->route('empresas.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      La empresa no existe.
                                    </div>');
            }
    
            $empresa->delete();
    
            return redirect()->route('empresas.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Empresa eliminada exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar la empresa: ' . $e->getMessage();
            }
    
            return redirect()->route('empresas.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}

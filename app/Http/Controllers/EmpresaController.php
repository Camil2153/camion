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
        $empresas = Empresa::paginate();

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
            ->with('success', 'Empresa creada exitosamente');
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
    
        return redirect()->route('empresas.index')->with('success', 'Empresa actualizada exitosamente');
    }

    /**
     * @param string $nit_emp
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($nit_emp)
    {
        $empresa = Empresa::find($nit_emp)->delete();

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa eliminada exitosamente');
    }
}

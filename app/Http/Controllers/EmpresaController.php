<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Paise;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
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
        $paises = Paise::pluck('nom_pai', 'cod_pai');
        return view('empresa.create', compact('empresa', 'paises'));
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
            ->with('success', 'Empresa created successfully.');
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
        $paises = Paise::pluck('nom_pai', 'cod_pai');
        return view('empresa.edit', compact('empresa', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        request()->validate(Empresa::$rules);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa updated successfully');
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
            ->with('success', 'Empresa deleted successfully');
    }
}

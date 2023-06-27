<?php

namespace App\Http\Controllers;

use App\Models\CategoriasGasto;
use Illuminate\Http\Request;
use App\Models\Empresa;

/**
 * Class CategoriasGastoController
 * @package App\Http\Controllers
 */
class CategoriasGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasGastos = CategoriasGasto::paginate();

        return view('categorias-gasto.index', compact('categoriasGastos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriasGastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriasGasto = new CategoriasGasto();
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('categorias-gasto.create', compact('categoriasGasto', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriasGasto::$rules);

        $categoriasGasto = CategoriasGasto::create($request->all());

        return redirect()->route('categorias-gastos.index')
            ->with('success', 'CategoriasGasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_cat_gas
     * @return \Illuminate\Http\Response
     */
    public function show($cod_cat_gas)
    {
        $categoriasGasto = CategoriasGasto::find($cod_cat_gas);

        return view('categorias-gasto.show', compact('categoriasGasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_cat_gas
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_cat_gas)
    {
        $categoriasGasto = CategoriasGasto::find($cod_cat_gas);
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('categorias-gasto.edit', compact('categoriasGasto', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriasGasto $categoriasGasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriasGasto $categoriasGasto)
    {
        request()->validate(CategoriasGasto::$rules);

        $categoriasGasto->update($request->all());

        return redirect()->route('categorias-gastos.index')
            ->with('success', 'CategoriasGasto updated successfully');
    }

    /**
     * @param string $cod_cat_gas
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_cat_gas)
    {
        $categoriasGasto = CategoriasGasto::find($cod_cat_gas)->delete();

        return redirect()->route('categorias-gastos.index')
            ->with('success', 'CategoriasGasto deleted successfully');
    }
}

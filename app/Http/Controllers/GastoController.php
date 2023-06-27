<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;
use App\Models\CategoriasGasto;
use App\Models\Ruta;
use App\Models\Empresa;

/**
 * Class GastoController
 * @package App\Http\Controllers
 */
class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::paginate();

        return view('gasto.index', compact('gastos'))
            ->with('i', (request()->input('page', 1) - 1) * $gastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gasto = new Gasto();
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('gasto.create', compact('gasto', 'categorias', 'rutas', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gasto::$rules);

        $gasto = Gasto::create($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_gas
     * @return \Illuminate\Http\Response
     */
    public function show($cod_gas)
    {
        $gasto = Gasto::find($cod_gas);

        return view('gasto.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_gas
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_gas)
    {
        $gasto = Gasto::find($cod_gas);
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('gasto.edit', compact('gasto', 'categorias', 'rutas', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gasto $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        request()->validate(Gasto::$rules);

        $gasto->update($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto updated successfully');
    }

    /**
     * @param string $cod_gas
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_gas)
    {
        $gasto = Gasto::find($cod_gas)->delete();

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Falla;
use Illuminate\Http\Request;
use App\Models\Componente;
use App\Models\Camione;
use App\Models\Tallere;
use App\Models\Empresa;

/**
 * Class FallaController
 * @package App\Http\Controllers
 */
class FallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fallas = Falla::paginate();

        return view('falla.index', compact('fallas'))
            ->with('i', (request()->input('page', 1) - 1) * $fallas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $falla = new Falla();
        $componentes = Componente::pluck('nom_com', 'num_ser_com');
        $camiones = Camione::pluck('pla_cam');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('falla.create', compact('falla', 'componentes', 'camiones', 'talleres', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Falla::$rules);

        $falla = Falla::create($request->all());

        return redirect()->route('fallas.index')
            ->with('success', 'Falla created successfully.');
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
        $componentes = Componente::pluck('nom_com', 'num_ser_com');
        $camiones = Camione::pluck('pla_cam');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('falla.edit', compact('falla', 'componentes', 'camiones', 'talleres', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Falla $falla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Falla $falla)
    {
        request()->validate(Falla::$rules);

        $falla->update($request->all());

        return redirect()->route('fallas.index')
            ->with('success', 'Falla updated successfully');
    }

    /**
     * @param string $cod_fal
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_fal)
    {
        $falla = Falla::find($cod_fal)->delete();

        return redirect()->route('fallas.index')
            ->with('success', 'Falla deleted successfully');
    }
}

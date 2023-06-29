<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Ruta;
use App\Models\Cliente;
use App\Models\Empresa;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viaje = new Viaje();
        $camiones = Camione::pluck('pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('viaje.create', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Viaje::$rules);

        $viaje = Viaje::create($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_via
     * @return \Illuminate\Http\Response
     */
    public function show($cod_via)
    {
        $viaje = Viaje::find($cod_via);

        return view('viaje.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_via
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_via)
    {
        $viaje = Viaje::find($cod_via);

        $camiones = Camione::pluck('pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('viaje.create', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viaje $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        request()->validate(Viaje::$rules);

        $viaje->update($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje updated successfully');
    }

    /**
     * @param string $cod_via
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_via)
    {
        $viaje = Viaje::find($cod_via)->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje deleted successfully');
    }
}

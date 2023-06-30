<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;
use App\Models\Ciudade;
use App\Models\Empresa;

/**
 * Class RutaController
 * @package App\Http\Controllers
 */
class RutaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:rutas.index')->only('index');
        $this->middleware('can:rutas.create')->only('create', 'store');
        $this->middleware('can:rutas.show')->only('show');
        $this->middleware('can:rutas.edit')->only('edit', 'update');
        $this->middleware('can:rutas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Ruta::paginate();

        return view('ruta.index', compact('rutas'))
            ->with('i', (request()->input('page', 1) - 1) * $rutas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruta = new Ruta();
        $ciudades = Ciudade::pluck('nom_ciu', 'cod_ciu');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('ruta.create', compact('ruta', 'empresas', 'ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ruta::$rules);

        $ruta = Ruta::create($request->all());

        return redirect()->route('rutas.index')
            ->with('success', 'Ruta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_rut
     * @return \Illuminate\Http\Response
     */
    public function show($cod_rut)
    {
        $ruta = Ruta::find($cod_rut);

        return view('ruta.show', compact('ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_rut
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_rut)
    {
        $ruta = Ruta::find($cod_rut);
        $ciudades = Ciudade::pluck('nom_ciu', 'cod_ciu');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('ruta.edit', compact('ruta', 'empresas', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ruta $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruta $ruta)
    {
        request()->validate(Ruta::$rules);

        $ruta->update($request->all());

        return redirect()->route('rutas.index')
            ->with('success', 'Ruta updated successfully');
    }

    /**
     * @param string $cod_rut
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_rut)
    {
        $ruta = Ruta::find($cod_rut)->delete();

        return redirect()->route('rutas.index')
            ->with('success', 'Ruta deleted successfully');
    }
}

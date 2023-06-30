<?php

namespace App\Http\Controllers;

use App\Models\Camione;
use Illuminate\Http\Request;
use App\Models\Conductore;
use App\Models\Empresa;

/**
 * Class CamioneController
 * @package App\Http\Controllers
 */
class CamioneController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:camiones.index')->only('index');
        $this->middleware('can:camiones.create')->only('create', 'store');
        $this->middleware('can:camiones.show')->only('show');
        $this->middleware('can:camiones.edit')->only('edit', 'update');
        $this->middleware('can:camiones.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camiones = Camione::paginate();

        return view('camione.index', compact('camiones'))
            ->with('i', (request()->input('page', 1) - 1) * $camiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $camione = new Camione();
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('camione.create', compact('camione', 'empresas', 'conductores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Camione::$rules);

        $camione = Camione::create($request->all());

        return redirect()->route('camiones.index')
            ->with('success', 'Camione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $pla_cam
     * @return \Illuminate\Http\Response
     */
    public function show($pla_cam)
    {
        $camione = Camione::find($pla_cam);

        return view('camione.show', compact('camione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $pla_cam
     * @return \Illuminate\Http\Response
     */
    public function edit($pla_cam)
    {
        $camione = Camione::find($pla_cam);
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('camione.edit', compact('camione', 'empresas', 'conductores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Camione $camione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camione $camione)
    {
        request()->validate(Camione::$rules);

        $camione->update($request->all());

        return redirect()->route('camiones.index')
            ->with('success', 'Camione updated successfully');
    }

    /**
     * @param string $pla_cam
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($pla_cam)
    {
        $camione = Camione::find($pla_cam)->delete();

        return redirect()->route('camiones.index')
            ->with('success', 'Camione deleted successfully');
    }
}

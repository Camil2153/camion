<?php

namespace App\Http\Controllers;

use App\Models\TiposServicio;
use Illuminate\Http\Request;
use App\Models\Empresa;

/**
 * Class TiposServicioController
 * @package App\Http\Controllers
 */
class TiposServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:tipos-servicios.index')->only('index');
        $this->middleware('can:tipos-servicios.create')->only('create', 'store');
        $this->middleware('can:tipos-servicios.show')->only('show');
        $this->middleware('can:tipos-servicios.edit')->only('edit', 'update');
        $this->middleware('can:tipos-servicios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposServicios = TiposServicio::paginate();

        return view('tipos-servicio.index', compact('tiposServicios'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposServicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposServicio = new TiposServicio();
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('tipos-servicio.create', compact('tiposServicio', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposServicio::$rules);

        $tiposServicio = TiposServicio::create($request->all());

        return redirect()->route('tipos-servicios.index')
            ->with('success', 'TiposServicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposServicio = TiposServicio::find($id);

        return view('tipos-servicio.show', compact('tiposServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposServicio = TiposServicio::find($id);
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('tipos-servicio.edit', compact('tiposServicio', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposServicio $tiposServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposServicio $tiposServicio)
    {
        request()->validate(TiposServicio::$rules);

        $tiposServicio->update($request->all());

        return redirect()->route('tipos-servicios.index')
            ->with('success', 'TiposServicio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposServicio = TiposServicio::find($id)->delete();

        return redirect()->route('tipos-servicios.index')
            ->with('success', 'TiposServicio deleted successfully');
    }
}

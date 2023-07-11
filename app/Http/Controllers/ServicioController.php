<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Models\TiposServicio;
use App\Models\Camione;
use App\Models\Tallere;
use App\Models\Empresa;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */
class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:servicios.index')->only('index');
        $this->middleware('can:servicios.create')->only('create', 'store');
        $this->middleware('can:servicios.show')->only('show');
        $this->middleware('can:servicios.edit')->only('edit', 'update');
        $this->middleware('can:servicios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::paginate();

        return view('servicio.index', compact('servicios'))
            ->with('i', (request()->input('page', 1) - 1) * $servicios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio = new Servicio();
        $tiposServicios = TiposServicio::pluck('nom_tip_ser', 'cod_tip_ser');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('servicio.create', compact('servicio', 'tiposServicios', 'camiones', 'talleres', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Servicio::$rules);

        $servicio = Servicio::create($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function show($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);

        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);
        $tiposServicios = TiposServicio::pluck('nom_tip_ser', 'cod_tip_ser');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('servicio.edit', compact('servicio', 'tiposServicios', 'camiones', 'talleres', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicio $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        request()->validate(Servicio::$rules);

        $servicio->update($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio updated successfully');
    }

    /**
     * @param string $cod_ser
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_ser)
    {
        $servicio = Servicio::find($cod_ser)->delete();

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio deleted successfully');
    }
}

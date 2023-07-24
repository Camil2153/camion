<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Actividade;
use App\Models\Falla;
use App\Models\Tallere;
use App\Models\Camione;
use App\Models\Almacene;

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
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        $fallas = Falla::pluck('desc_fal', 'cod_fal');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::pluck('com_alm', 'cod_alm');
        return view('servicio.create', compact('servicio', 'sistemas', 'actividades', 'fallas', 'talleres', 'camiones', 'almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // Otras reglas de validación...
            'tip_ser' => 'required|in:preventivo,correctivo',
        ]);

        $servicio = Servicio::create($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio creado exitosamente');
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
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        $fallas = Falla::pluck('desc_fal', 'cod_fal');
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::pluck('com_alm', 'cod_alm');
        return view('servicio.edit', compact('servicio', 'sistemas', 'actividades', 'fallas', 'talleres', 'camiones', 'almacenes'));
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
        $request->validate(Arr::except(Servicio::$rules, 'cod_ser'));

        $servicio->update($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio actualizado exitosamente');
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
            ->with('success', 'Servicio eliminado exitosamente');
    }
       
}
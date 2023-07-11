<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
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
     * @param  string $cod_tip_ser
     * @return \Illuminate\Http\Response
     */
    public function show($cod_tip_ser)
    {
        $tiposServicio = TiposServicio::find($cod_tip_ser);

        return view('tipos-servicio.show', compact('tiposServicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_tip_ser
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_tip_ser)
    {
        $tiposServicio = TiposServicio::find($cod_tip_ser);
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
    // Validar los campos del formulario, excepto 'cod_tip_ser'
    $request->validate(Arr::except(TiposServicio::$rules, 'cod_tip_ser'));

    // Verificar si el valor de 'cod_tip_ser' ha cambiado
    if ($request->input('cod_tip_ser') !== $tiposServicio->cod_tip_ser) {
        // Validar 'cod_tip_ser' como único en la tabla 'tiposServicios'
        $request->validate([
            'cod_tip_ser' => 'required|unique:tiposServicios,cod_tip_ser',
        ]);
    }

    // Actualizar los atributos del modelo TiposServicio
    $tiposServicio->update($request->all());

    return redirect()->route('tipos-servicios.index')->with('success', 'TiposServicio updated successfully');
}

    /**
     * @param string $cod_tip_ser
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_tip_ser)
    {
        $tiposServicio = TiposServicio::find($cod_tip_ser)->delete();

        return redirect()->route('tipos-servicios.index')
            ->with('success', 'TiposServicio deleted successfully');
    }
}
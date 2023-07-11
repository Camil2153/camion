<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Viaje;
use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Cliente;
use App\Models\Ruta;
use App\Models\Empresa;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:viajes.index')->only('index');
        $this->middleware('can:viajes.create')->only('create', 'store');
        $this->middleware('can:viajes.show')->only('show');
        $this->middleware('can:viajes.edit')->only('edit', 'update');
        $this->middleware('can:viajes.destroy')->only('destroy');
    }
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
        $camiones = Camione::where('est_cam', 'disponible')->pluck('pla_cam', 'pla_cam');
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viaje = Viaje::find($id);

        return view('viaje.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $viaje = Viaje::find($cod_via);
=======
        $viaje = Viaje::find($id);
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
        $camiones = Camione::where('est_cam', 'disponible')->pluck('pla_cam', 'pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('viaje.edit', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas'));
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
    // Validar los campos del formulario, excepto 'cod_via'
    $request->validate(Arr::except(Viaje::$rules, 'cod_via'));

    // Verificar si el valor de 'cod_via' ha cambiado
    if ($request->input('cod_via') !== $viaje->cod_via) {
        // Validar 'cod_via' como único en la tabla 'viajes'
        $request->validate([
            'cod_via' => 'required|unique:viajes,cod_via',
        ]);
    }

    // Actualizar los atributos del modelo Viaje
    $viaje->update($request->all());

    return redirect()->route('viajes.index')->with('success', 'Viaje updated successfully');
}





    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $viaje = Viaje::find($id)->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje deleted successfully');
    }
}

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
        
        $camionesDisponibles = Camione::where('est_cam', 'disponible')->get();
        
        $camiones = $camionesDisponibles->pluck('pla_cam', 'pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        
        return view('viaje.create', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas', 'camionesDisponibles'));
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
            'cod_via' => 'required',
            'car_via' => 'required',
            'pes_via' => 'required',
            'est_via' => 'required',
            'fec_sal_via' => 'required',
            'hor_sal_via' => 'required',
            'fec_lle_via' => 'required',
            'hor_lle_via' => 'required',
            'kil_via' => 'required',
            'com_via' => 'required',
            'cam_via' => 'required',
            'cli_via' => 'required',
            'rut_via' => 'required',
            'emp_via' => 'required',
        ]);

        $viaje = Viaje::create($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje creado exitosamente.');
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
                'car_via' => 'required',
                'pes_via' => 'required',
                'est_via' => 'required',
                'fec_sal_via' => 'required',
                'hor_sal_via' => 'required',
                'fec_lle_via' => 'required',
                'hor_lle_via' => 'required',
                'kil_via' => 'required',
                'com_via' => 'required',
                'cam_via' => 'required',
                'cli_via' => 'required',
                'rut_via' => 'required',
                'emp_via' => 'required',
            ]);
        }

        // Actualizar los atributos del modelo Viaje
        $viaje->update($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje actualizado exitosamente.');
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

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Camione;
use Illuminate\Http\Request;
use App\Models\Conductore;

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
        $conductoresDisponibles = Conductore::whereNotIn('dni_con', function ($query) {
            $query->select('con_cam')
                  ->from('camiones');
        })->pluck('nom_con', 'dni_con')->toArray();

        return view('camione.create', compact('camione', 'conductoresDisponibles'));
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
            ->with('success', 'Camion creado exitosamente');
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
        $conductoresDisponibles = Conductore::whereNotIn('dni_con', function ($query) {
            $query->select('con_cam')
                  ->from('camiones');
        })->pluck('nom_con', 'dni_con')->toArray();

        return view('camione.edit', compact('camione', 'conductoresDisponibles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Camione $camione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, camione $camione)
    {
        // Validar los campos del formulario, excepto 'pla_cam'
        $request->validate(Arr::except(camione::$rules, 'pla_cam'));
    
        // Verificar si el valor de 'pla_cam' ha cambiado
        if ($request->input('pla_cam') !== $camione->pla_cam) {
            // Validar 'pla_cam' como único en la tabla 'camiones'
            $request->validate([
                'pla_cam' => 'required|unique:camiones,pla_cam',
            ]);
        }
    
        // Actualizar los atributos del modelo camione
        $camione->update($request->all());
    
        return redirect()->route('camiones.index')->with('success', 'Camion actualizado exitosamente');
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
            ->with('success', 'Camion eliminado exitosamente');
    }
}
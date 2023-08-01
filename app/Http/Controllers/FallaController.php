<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Falla;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Camione;

/**
 * Class FallaController
 * @package App\Http\Controllers
 */
class FallaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:fallas.index')->only('index');
        $this->middleware('can:fallas.create')->only('create', 'store');
        $this->middleware('can:fallas.show')->only('show');
        $this->middleware('can:fallas.edit')->only('edit', 'update');
        $this->middleware('can:fallas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fallas = Falla::paginate();

        return view('falla.index', compact('fallas'))
            ->with('i', (request()->input('page', 1) - 1) * $fallas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $falla = new Falla();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        return view('falla.create', compact('falla', 'sistemas', 'camiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('servicio_id') && $request->get('servicio_id') !== null) {
            // Obtener el ID del servicio al que se está asignando la falla
            $servicioId = $request->get('servicio_id');
            
            // Buscar el servicio en la base de datos
            $servicio = Servicio::find($servicioId);
            
            // Si se encontró el servicio en la base de datos
            if ($servicio) {
                // Actualizar el estado de la falla a "En proceso de reparación"
                $this->est_act_fal = 'proceso';
                $this->save();
            }
        }

        $request->merge(['est_act_fal' => 'pendiente']);
        request()->validate(Falla::$rules);
        $falla = Falla::create($request->all());

        return redirect()->route('fallas.index')
            ->with('success', 'Falla creada exitosamente');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  string $cod_fal
     * @return \Illuminate\Http\Response
     */
    public function show($cod_fal)
    {
        $falla = Falla::find($cod_fal);

        return view('falla.show', compact('falla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_fal
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_fal)
    {
        $falla = Falla::find($cod_fal);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        return view('falla.edit', compact('falla', 'sistemas', 'camiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Falla $falla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, falla $falla)
    {
        // Validar los campos del formulario, excepto 'cod_fal'
        $request->validate(Arr::except(falla::$rules, 'cod_fal'));
    
        // Verificar si el valor de 'cod_fal' ha cambiado
        if ($request->input('cod_fal') !== $falla->cod_fal) {
            // Validar 'cod_fal' como único en la tabla 'fallas'
            $request->validate([
                'cod_fal' => 'required|unique:fallas,cod_fal',
            ]);
        }
    
        // Actualizar los atributos del modelo falla
        $falla->update($request->all());
        $falla->update($request->except('est_act_fal'));
        return redirect()->route('fallas.index')->with('success', 'Falla actualizada exitosamente');
    }

    /**
     * @param string $cod_fal
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_fal)
    {
        $falla = Falla::find($cod_fal)->delete();

        return redirect()->route('fallas.index')
            ->with('success', 'Falla eliminada exitosamente');
    }
}

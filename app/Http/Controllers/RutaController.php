<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Ruta;
use Illuminate\Http\Request;

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
        return view('ruta.create', compact('ruta'));
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
            ->with('success', 'Ruta creada exitosamente');
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
        return view('ruta.edit', compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ruta $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ruta $ruta)
    {
        // Validar los campos del formulario, excepto 'cod_rut'
        $request->validate(Arr::except(ruta::$rules, 'cod_rut'));
    
        // Verificar si el valor de 'cod_rut' ha cambiado
        if ($request->input('cod_rut') !== $ruta->cod_rut) {
            // Validar 'cod_rut' como único en la tabla 'rutas'
            $request->validate([
                'cod_rut' => 'required|unique:rutas,cod_rut',
            ]);
        }
    
        // Actualizar los atributos del modelo ruta
        $ruta->update($request->all());
    
        return redirect()->route('rutas.index')->with('success', 'Ruta actualizada exitosamente');
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
            ->with('success', 'Ruta eliminada exitosamente');
    }
}
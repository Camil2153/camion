<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Tallere;
use Illuminate\Http\Request;
use App\Models\Ruta;

/**
 * Class TallereController
 * @package App\Http\Controllers
 */
class TallereController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:talleres.index')->only('index');
        $this->middleware('can:talleres.create')->only('create', 'store');
        $this->middleware('can:talleres.show')->only('show');
        $this->middleware('can:talleres.edit')->only('edit', 'update');
        $this->middleware('can:talleres.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres = Tallere::paginate();

        return view('tallere.index', compact('talleres'))
            ->with('i', (request()->input('page', 1) - 1) * $talleres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallere = new Tallere();
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('tallere.create', compact('tallere', 'rutas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tallere::$rules);

        $tallere = Tallere::create($request->all());

        return redirect()->route('talleres.index')
            ->with('success', 'Taller creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $nit_tal
     * @return \Illuminate\Http\Response
     */
    public function show($nit_tal)
    {
        $tallere = Tallere::find($nit_tal);

        return view('tallere.show', compact('tallere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $nit_tal
     * @return \Illuminate\Http\Response
     */
    public function edit($nit_tal)
    {
        $tallere = Tallere::find($nit_tal);
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('tallere.edit', compact('tallere', 'rutas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tallere $tallere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tallere $tallere)
    {
        // Validar los campos del formulario, excepto 'nit_tal'
        $request->validate(Arr::except(tallere::$rules, 'nit_tal'));
    
        // Verificar si el valor de 'nit_tal' ha cambiado
        if ($request->input('nit_tal') !== $tallere->nit_tal) {
            // Validar 'nit_tal' como único en la tabla 'talleres'
            $request->validate([
                'nit_tal' => 'required|unique:talleres,nit_tal',
            ]);
        }
    
        // Actualizar los atributos del modelo tallere
        $tallere->update($request->all());
    
        return redirect()->route('talleres.index')->with('success', 'Taller actualizado exitosamente');
    }

    /**
     * @param string $nit_tal
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($nit_tal)
    {
        $tallere = Tallere::find($nit_tal)->delete();

        return redirect()->route('talleres.index')
            ->with('success', 'Taller eliminado exitosamente');
    }
}
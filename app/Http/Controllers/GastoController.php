<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Gasto;
use Illuminate\Http\Request;
use App\Models\CategoriasGasto;
use App\Models\Viaje;
use App\Models\Empresa;

/**
 * Class GastoController
 * @package App\Http\Controllers
 */
class GastoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:gastos.index')->only('index');
        $this->middleware('can:gastos.create')->only('create', 'store');
        $this->middleware('can:gastos.show')->only('show');
        $this->middleware('can:gastos.edit')->only('edit', 'update');
        $this->middleware('can:gastos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::paginate();

        return view('gasto.index', compact('gastos'))
            ->with('i', (request()->input('page', 1) - 1) * $gastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gasto = new Gasto();
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $viajes = Viaje::pluck('cod_via', 'cod_via');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('gasto.create', compact('gasto', 'categorias', 'viajes', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gasto::$rules);

        $gasto = Gasto::create($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gasto = Gasto::find($id);

        return view('gasto.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Gasto::find($id);
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $viajes = Viaje::pluck('cod_via', 'cod_via');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('gasto.edit', compact('gasto', 'categorias', 'viajes', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gasto $gasto
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, gasto $gasto)
{
    // Validar los campos del formulario, excepto 'cod_via'
    $request->validate(Arr::except(gasto::$rules, 'cod_gas'));

    // Verificar si el valor de 'cod_gas' ha cambiado
    if ($request->input('cod_gas') !== $gasto->cod_gas) {
        // Validar 'cod_gas' como único en la tabla 'gastos'
        $request->validate([
            'cod_gas' => 'required|unique:gastos,cod_gas',
        ]);
    }

    // Actualizar los atributos del modelo gasto
    $gasto->update($request->all());

    return redirect()->route('gastos.index')->with('success', 'gasto updated successfully');
}

    /**katherin <3
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gasto = Gasto::find($id)->delete();

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto deleted successfully');
    }
}

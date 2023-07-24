<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\CategoriasGasto;
use Illuminate\Http\Request;

/**
 * Class CategoriasGastoController
 * @package App\Http\Controllers
 */
class CategoriasGastoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:categorias-gastos.index')->only('index');
        $this->middleware('can:categorias-gastos.create')->only('create', 'store');
        $this->middleware('can:categorias-gastos.show')->only('show');
        $this->middleware('can:categorias-gastos.edit')->only('edit', 'update');
        $this->middleware('can:categorias-gastos.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasGastos = CategoriasGasto::paginate();

        return view('categorias-gasto.index', compact('categoriasGastos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriasGastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriasGasto = new CategoriasGasto();
        return view('categorias-gasto.create', compact('categoriasGasto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriasGasto::$rules);

        $categoriasGasto = CategoriasGasto::create($request->all());

        return redirect()->route('categorias-gastos.index')
            ->with('success', 'CategoriasGasto creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_cat_gas
     * @return \Illuminate\Http\Response
     */
    public function show($cod_cat_gas)
    {
        $categoriasGasto = CategoriasGasto::find($cod_cat_gas);

        return view('categorias-gasto.show', compact('categoriasGasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriasGasto = CategoriasGasto::find($id);

        return view('categorias-gasto.edit', compact('categoriasGasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriasGasto $categoriasGasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoriasGasto $categoriasGasto)
    {
        // Validar los campos del formulario, excepto 'cod_cat_gas'
        $request->validate(Arr::except(categoriasGasto::$rules, 'cod_cat_gas'));
    
        // Verificar si el valor de 'cod_cat_gas' ha cambiado
        if ($request->input('cod_cat_gas') !== $categoriasGasto->cod_cat_gas) {
            // Validar 'cod_cat_gas' como único en la tabla 'categoriasGastos'
            $request->validate([
                'cod_cat_gas' => 'required|unique:categoriasGastos,cod_cat_gas',
            ]);
        }
    
        // Actualizar los atributos del modelo categoriasGasto
        $categoriasGasto->update($request->all());
    
        return redirect()->route('categorias-gastos.index')->with('success', 'categoriasGasto actualizada exitosamente');
    }

    /**
     * @param string $cod_cat_gas
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_cat_gas)
    {
        $categoriasGasto = CategoriasGasto::find($cod_cat_gas)->delete();

        return redirect()->route('categorias-gastos.index')
            ->with('success', 'CategoriasGasto eliminada exitosamnete');
    }
}

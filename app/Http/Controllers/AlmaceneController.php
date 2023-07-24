<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Almacene;
use Illuminate\Http\Request;
use App\Models\Componente;

/**
 * Class AlmaceneController
 * @package App\Http\Controllers
 */
class AlmaceneController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:almacenes.index')->only('index');
        $this->middleware('can:almacenes.create')->only('create', 'store');
        $this->middleware('can:almacenes.show')->only('show');
        $this->middleware('can:almacenes.edit')->only('edit', 'update');
        $this->middleware('can:almacenes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenes = Almacene::paginate();

        return view('almacene.index', compact('almacenes'))
            ->with('i', (request()->input('page', 1) - 1) * $almacenes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacene = new Almacene();
        $componentes = Componente::pluck('nom_com', 'num_ser_com');
        return view('almacene.create', compact('almacene', 'componentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Almacene::$rules);

        $almacene = Almacene::create($request->all());

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacen creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_alm
     * @return \Illuminate\Http\Response
     */
    public function show($cod_alm)
    {
        $almacene = Almacene::find($cod_alm);

        return view('almacene.show', compact('almacene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_alm
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_alm)
    {
        $almacene = Almacene::find($cod_alm);
        $componentes = Componente::pluck('nom_com', 'num_ser_com');
        return view('almacene.edit', compact('almacene', 'componentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Almacene $almacene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacene $almacene)
    {
        request()->validate(Almacene::$rules);

        $almacene->update($request->all());

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacen actualizado exitosamente');
    }

    /**
     * @param string $cod_alm
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_alm)
    {
        $almacene = Almacene::find($cod_alm)->delete();

        return redirect()->route('almacenes.index')
            ->with('success', 'Almacene eliminado exitosamente');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Empresa;

/**
 * Class ComponenteController
 * @package App\Http\Controllers
 */
class ComponenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:componentes.index')->only('index');
        $this->middleware('can:componentes.create')->only('create', 'store');
        $this->middleware('can:componentes.show')->only('show');
        $this->middleware('can:componentes.edit')->only('edit', 'update');
        $this->middleware('can:componentes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $componentes = Componente::paginate();

        return view('componente.index', compact('componentes'))
            ->with('i', (request()->input('page', 1) - 1) * $componentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $componente = new Componente();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('componente.create', compact('componente', 'empresas', 'sistemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Componente::$rules);

        $componente = Componente::create($request->all());

        return redirect()->route('componentes.index')
            ->with('success', 'Componente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $num_ser_com
     * @return \Illuminate\Http\Response
     */
    public function show($num_ser_com)
    {
        $componente = Componente::find($num_ser_com);

        return view('componente.show', compact('componente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $num_ser_com
     * @return \Illuminate\Http\Response
     */
    public function edit($num_ser_com)
    {
        $componente = Componente::find($num_ser_com);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('componente.edit', compact('componente', 'empresas', 'sistemas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Componente $componente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Componente $componente)
    {
        request()->validate(Componente::$rules);

        $componente->update($request->all());

        return redirect()->route('componentes.index')
            ->with('success', 'Componente updated successfully');
    }

    /**
     * @param string $num_ser_com
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($num_ser_com)
    {
        $componente = Componente::find($num_ser_com)->delete();

        return redirect()->route('componentes.index')
            ->with('success', 'Componente deleted successfully');
    }
}

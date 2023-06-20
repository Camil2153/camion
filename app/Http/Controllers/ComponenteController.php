<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\Request;

/**
 * Class ComponenteController
 * @package App\Http\Controllers
 */
class ComponenteController extends Controller
{
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
        return view('componente.create', compact('componente'));
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
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($num_ser_com)
    {
        $componente = Componente::where('num_ser_com', $num_ser_com)->first();

        if ($componente) {
            return view('componente.edit', compact('componente'));
        }

        return redirect()->route('componentes.index')
            ->with('error', 'No se encontró el conductor');
    }

        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string $num_ser_com
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $num_ser_com)
    {
        request()->validate(Componente::$rules);

        $componente = Componente::where('num_ser_com', $num_ser_com)->first();


        if ($componente) {
            $componente->update($request->all());
            return redirect()->route('componentes.index')
                ->with('success', 'Conductor actualizado exitosamente');
        }

        return redirect()->route('conductores.index')
            ->with('error', 'No se encontró el conductor');
    }


    /**
     * @param string $num_ser_com
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($num_ser_com)
    {
        $componente = Componente::where('num_ser_com', $num_ser_com)->first();

        if ($componente) {
            $componente->delete();
            return redirect()->route('componentes.index')
                ->with('success', 'Conductor eliminado exitosamente');
        }

        return redirect()->route('componentes.index')
            ->with('error', 'No se encontró el conductor');
    }

      
}

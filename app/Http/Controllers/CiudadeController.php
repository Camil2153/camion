<?php

namespace App\Http\Controllers;

use App\Models\Ciudade;
use Illuminate\Http\Request;
use App\Models\Paise;

/**
 * Class CiudadeController
 * @package App\Http\Controllers
 */
class CiudadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:ciudades.index')->only('index');
        $this->middleware('can:ciudades.create')->only('create', 'store');
        $this->middleware('can:ciudades.show')->only('show');
        $this->middleware('can:ciudades.edit')->only('edit', 'update');
        $this->middleware('can:ciudades.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudade::paginate();

        return view('ciudade.index', compact('ciudades'))
            ->with('i', (request()->input('page', 1) - 1) * $ciudades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudade = new Ciudade();
        $paises = Paise::pluck('nom_pai', 'cod_pai');
        return view('ciudade.create', compact('ciudade', 'paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ciudade::$rules);

        $ciudade = Ciudade::create($request->all());

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_ciu
     * @return \Illuminate\Http\Response
     */
    public function show($cod_ciu)
    {
        $ciudade = Ciudade::find($cod_ciu);

        return view('ciudade.show', compact('ciudade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_ciu
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_ciu)
    {
        $ciudade = Ciudade::find($cod_ciu);
        $paises = Paise::pluck('nom_pai', 'cod_pai');
        return view('ciudade.edit', compact('ciudade', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ciudade $ciudade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudade $ciudade)
    {
        request()->validate(Ciudade::$rules);

        $ciudade->update($request->all());

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade updated successfully');
    }

    /**
     * @param string $cod_ciu
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_ciu)
    {
        $ciudade = Ciudade::find($cod_ciu)->delete();

        return redirect()->route('ciudades.index')
            ->with('success', 'Ciudade deleted successfully');
    }
}

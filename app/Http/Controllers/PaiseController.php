<?php

namespace App\Http\Controllers;

use App\Models\Paise;
use Illuminate\Http\Request;

/**
 * Class PaiseController
 * @package App\Http\Controllers
 */
class PaiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:paises.index')->only('index');
        $this->middleware('can:paises.create')->only('create', 'store');
        $this->middleware('can:paises.show')->only('show');
        $this->middleware('can:paises.edit')->only('edit', 'update');
        $this->middleware('can:paises.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Paise::paginate();

        return view('paise.index', compact('paises'))
            ->with('i', (request()->input('page', 1) - 1) * $paises->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paise = new Paise();
        return view('paise.create', compact('paise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paise::$rules);

        $paise = Paise::create($request->all());

        return redirect()->route('paises.index')
            ->with('success', 'Paise created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_pai
     * @return \Illuminate\Http\Response
     */
    public function show($cod_pai)
    {
        $paise = Paise::find($cod_pai);

        return view('paise.show', compact('paise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_pai
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_pai)
    {
        $paise = Paise::find($cod_pai);

        return view('paise.edit', compact('paise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paise $paise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paise $paise)
    {
        request()->validate(Paise::$rules);

        $paise->update($request->all());

        return redirect()->route('paises.index')
            ->with('success', 'Paise updated successfully');
    }

    /**
     * @param string $cod_pai
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_pai)
    {
        $paise = Paise::find($cod_pai)->delete();

        return redirect()->route('paises.index')
            ->with('success', 'Paise deleted successfully');
    }
}

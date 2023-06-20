<?php

namespace App\Http\Controllers;

use App\Models\Categoriagasto;
use Illuminate\Http\Request;

/**
 * Class CategoriagastoController
 * @package App\Http\Controllers
 */
class CategoriagastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriagastos = Categoriagasto::paginate();

        return view('categoriagasto.index', compact('categoriagastos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriagastos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriagasto = new Categoriagasto();
        return view('categoriagasto.create', compact('categoriagasto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoriagasto::$rules);

        $categoriagasto = Categoriagasto::create($request->all());

        return redirect()->route('categoriagastos.index')
            ->with('success', 'Categoriagasto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriagasto = Categoriagasto::find($id);

        return view('categoriagasto.show', compact('categoriagasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriagasto = Categoriagasto::find($id);

        return view('categoriagasto.edit', compact('categoriagasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoriagasto $categoriagasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoriagasto $categoriagasto)
    {
        request()->validate(Categoriagasto::$rules);

        $categoriagasto->update($request->all());

        return redirect()->route('categoriagastos.index')
            ->with('success', 'Categoriagasto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriagasto = Categoriagasto::find($id)->delete();

        return redirect()->route('categoriagastos.index')
            ->with('success', 'Categoriagasto deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DocumentosConductore;
use Illuminate\Http\Request;
use App\Models\Conductore;
use App\Models\Empresa;

/**
 * Class DocumentosConductoreController
 * @package App\Http\Controllers
 */
class DocumentosConductoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:documentos-conductores.index')->only('index');
        $this->middleware('can:documentos-conductores.create')->only('create', 'store');
        $this->middleware('can:documentos-conductores.show')->only('show');
        $this->middleware('can:documentos-conductores.edit')->only('edit', 'update');
        $this->middleware('can:documentos-conductores.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentosConductores = DocumentosConductore::paginate();

        return view('documentos-conductore.index', compact('documentosConductores'))
            ->with('i', (request()->input('page', 1) - 1) * $documentosConductores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentosConductore = new DocumentosConductore();
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('documentos-conductore.create', compact('documentosConductore', 'empresas', 'conductores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DocumentosConductore::$rules);

        $documentosConductore = DocumentosConductore::create($request->all());

        return redirect()->route('documentos-conductores.index')
            ->with('success', 'DocumentosConductore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $num_lic_doc_con
     * @return \Illuminate\Http\Response
     */
    public function show($num_lic_doc_con)
    {
        $documentosConductore = DocumentosConductore::find($num_lic_doc_con);

        return view('documentos-conductore.show', compact('documentosConductore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $num_lic_doc_con
     * @return \Illuminate\Http\Response
     */
    public function edit($num_lic_doc_con)
    {
        $documentosConductore = DocumentosConductore::find($num_lic_doc_con);
        $conductores = Conductore::pluck('nom_con', 'dni_con');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('documentos-conductore.edit', compact('documentosConductore', 'empresas', 'conductores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocumentosConductore $documentosConductore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentosConductore $documentosConductore)
    {
        request()->validate(DocumentosConductore::$rules);

        $documentosConductore->update($request->all());

        return redirect()->route('documentos-conductores.index')
            ->with('success', 'DocumentosConductore updated successfully');
    }

    /**
     * @param string $num_lic_doc_con
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($num_lic_doc_con)
    {
        $documentosConductore = DocumentosConductore::find($num_lic_doc_con)->delete();

        return redirect()->route('documentos-conductores.index')
            ->with('success', 'DocumentosConductore deleted successfully');
    }
}

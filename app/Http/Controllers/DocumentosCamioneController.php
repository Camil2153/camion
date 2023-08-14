<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\DocumentosCamione;
use Illuminate\Http\Request;
use App\Models\Camione;

/**
 * Class DocumentosCamioneController
 * @package App\Http\Controllers
 */
class DocumentosCamioneController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:documentos-camiones.index')->only('index');
        $this->middleware('can:documentos-camiones.create')->only('create', 'store');
        $this->middleware('can:documentos-camiones.show')->only('show');
        $this->middleware('can:documentos-camiones.edit')->only('edit', 'update');
        $this->middleware('can:documentos-camiones.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentosCamiones = DocumentosCamione::paginate();

        return view('documentos-camione.index', compact('documentosCamiones'))
            ->with('i', (request()->input('page', 1) - 1) * $documentosCamiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentosCamione = new DocumentosCamione();
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        return view('documentos-camione.create', compact('documentosCamione', 'camiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DocumentosCamione::$rules);
        $request->merge(['est_doc_cam' => 'válido']);
        $documentosCamione = DocumentosCamione::create($request->all());

        return redirect()->route('documentos-camiones.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Documento del camión creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_doc_cam
     * @return \Illuminate\Http\Response
     */
    public function show($cod_doc_cam)
    {
        $documentosCamione = DocumentosCamione::find($cod_doc_cam);

        return view('documentos-camione.show', compact('documentosCamione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_doc_cam
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_doc_cam)
    {
        $documentosCamione = DocumentosCamione::find($cod_doc_cam);
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        return view('documentos-camione.edit', compact('documentosCamione', 'camiones'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocumentosCamione $documentosCamione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documentosCamione $documentosCamione)
    {
        // Validar los campos del formulario, excepto 'cod_doc_cam'
        $request->validate(Arr::except(documentosCamione::$rules, 'cod_doc_cam'));
    
        // Verificar si el valor de 'cod_doc_cam' ha cambiado
        if ($request->input('cod_doc_cam') !== $documentosCamione->cod_doc_cam) {
            // Validar 'cod_doc_cam' como único en la tabla 'documentosCamiones'
            $request->validate([
                'cod_doc_cam' => 'required|unique:documentosCamiones,cod_doc_cam',
            ]);
        }
    
        // Actualizar los atributos del modelo documentosCamione
        $documentosCamione->update($request->all());
    
        return redirect()->route('documentos-camiones.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Documento del camión actualizado exitosamente.
                                </div>');
    }

    /**
     * @param string $cod_doc_cam
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_doc_cam)
    {
        try {
            // Intenta eliminar el registro del camión
            $documentosCamione = DocumentosCamione::find($cod_doc_cam);
            if (!$documentosCamione) {
                return redirect()->route('documentos-camiones.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El documento del camión no existe.
                                    </div>');
            }
    
            $documentosCamione->delete();
    
            return redirect()->route('documentos-camiones.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Documento del camión eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el documento del camión: ' . $e->getMessage();
            }
    
            return redirect()->route('documentos-camiones.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}

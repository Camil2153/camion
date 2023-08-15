<?php

namespace App\Http\Controllers;

use App\Models\Actividade;
use Illuminate\Http\Request;
use App\Models\Sistema;


/**
 * Class ActividadeController
 * @package App\Http\Controllers
 */
class ActividadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:actividades.index')->only('index');
        $this->middleware('can:actividades.create')->only('create', 'store');
        $this->middleware('can:actividades.show')->only('show');
        $this->middleware('can:actividades.edit')->only('edit', 'update');
        $this->middleware('can:actividades.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividade::paginate();

        return view('actividade.index', compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * $actividades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividade = new Actividade();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        return view('actividade.create', compact('actividade', 'sistemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actividade::$rules);

        $actividade = Actividade::create($request->all());

        return redirect()->route('actividades.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Actividad creada exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $cod_act
     * @return \Illuminate\Http\Response
     */
    public function show($cod_act)
    {
        $actividade = Actividade::find($cod_act);

        return view('actividade.show', compact('actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $cod_act
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_act)
    {
        $actividade = Actividade::find($cod_act);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        return view('actividade.edit', compact('actividade', 'sistemas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividade $actividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividade $actividade)
    {
        request()->validate(Actividade::$rules);

        $actividade->update($request->all());

        return redirect()->route('actividades.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Actividad actualizada exitosamente.
                                </div>');
    }

    /**
     * @param int $cod_act
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_act)
    {
        try {
            // Intenta eliminar el registro del camión
            $actividade = Actividade::find($cod_act);
            if (!$actividade) {
                return redirect()->route('actividades.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      La actividad no existe.
                                    </div>');
            }
    
            $actividade->delete();
    
            return redirect()->route('actividades.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Actividad eliminada exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar la actividad: ' . $e->getMessage();
            }
    
            return redirect()->route('actividades.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}

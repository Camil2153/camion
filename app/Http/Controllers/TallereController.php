<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Tallere;
use Illuminate\Http\Request;
use App\Models\Ruta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Camione;

/**
 * Class TallereController
 * @package App\Http\Controllers
 */
class TallereController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:talleres.index')->only('index');
        $this->middleware('can:talleres.create')->only('create', 'store');
        $this->middleware('can:talleres.show')->only('show');
        $this->middleware('can:talleres.edit')->only('edit', 'update');
        $this->middleware('can:talleres.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        if (!$user) {
            // El usuario no está autenticado, redirigir o mostrar un mensaje de error.
            return "No estás autenticado.";
        }
        
        $conductorEmail = $user->email;
        
        // Verificar si el correo del usuario coincide con el correo en la tabla de conductores
        $conductor = DB::table('conductores')
            ->where('cor_ele_con', $conductorEmail)
            ->first();
    
        if ($conductor) {
            // El usuario es un conductor, continuar con la lógica para obtener los talleres.
            $camion = Camione::where('con_cam', $conductor->dni_con)->first();
    
            if ($camion) {
                $viaje = $camion->viajes()->latest()->first();
    
                if ($viaje) {
                    $ruta = $viaje->ruta;
                    
                    if ($ruta) {
                        $talleres = $ruta->talleres()->paginate();
                    } else {
                        $talleres = collect(); // No hay ruta asociada, devolver una colección vacía.
                    }
                } else {
                    $talleres = collect(); // No hay viaje asociado, devolver una colección vacía.
                }
            } else {
                $talleres = collect(); // No hay camión asociado, devolver una colección vacía.
            }
        } else {
            // El usuario no es un conductor, obtén todos los talleres sin restricción.
            $talleres = Tallere::paginate();
        }
    
        return view('tallere.index', compact('talleres'))
            ->with('i', $talleres->isEmpty() ? 0 : (request()->input('page', 1) - 1) * $talleres->perPage());    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallere = new Tallere();
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('tallere.create', compact('tallere', 'rutas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tallere::$rules);

        $tallere = Tallere::create($request->all());

        return redirect()->route('talleres.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Taller creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $nit_tal
     * @return \Illuminate\Http\Response
     */
    public function show($nit_tal)
    {
        $tallere = Tallere::find($nit_tal);

        return view('tallere.show', compact('tallere'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $nit_tal
     * @return \Illuminate\Http\Response
     */
    public function edit($nit_tal)
    {
        $tallere = Tallere::find($nit_tal);
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        return view('tallere.edit', compact('tallere', 'rutas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tallere $tallere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tallere $tallere)
    {
        // Validar los campos del formulario, excepto 'nit_tal'
        $request->validate(Arr::except(tallere::$rules, 'nit_tal'));
    
        // Verificar si el valor de 'nit_tal' ha cambiado
        if ($request->input('nit_tal') !== $tallere->nit_tal) {
            // Validar 'nit_tal' como único en la tabla 'talleres'
            $request->validate([
                'nit_tal' => 'required|unique:talleres,nit_tal',
            ]);
        }
    
        // Actualizar los atributos del modelo tallere
        $tallere->update($request->all());
    
        return redirect()->route('talleres.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Taller actualizado exitosamente.
                                </div>');
    }

    /**
     * @param string $nit_tal
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($nit_tal)
    {
        try {
            // Intenta eliminar el registro del camión
             $tallere = Tallere::find($nit_tal);
            if (! $tallere) {
                return redirect()->route('talleres.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El taller no existe.
                                    </div>');
            }
    
             $tallere->delete();
    
            return redirect()->route('talleres.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Taller eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el taller: ' . $e->getMessage();
            }
    
            return redirect()->route('talleres.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}
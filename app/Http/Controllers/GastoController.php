<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Gasto;
use Illuminate\Http\Request;
use App\Models\CategoriasGasto;
use App\Models\Viaje;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Camione;

/**
 * Class GastoController
 * @package App\Http\Controllers
 */
class GastoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:gastos.index')->only('index');
        $this->middleware('can:gastos.create')->only('create', 'store');
        $this->middleware('can:gastos.show')->only('show');
        $this->middleware('can:gastos.edit')->only('edit', 'update');
        $this->middleware('can:gastos.destroy')->only('destroy');
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
            // El usuario es un conductor, obtener los gastos asociados al viaje de su camión.
            $camion = Camione::where('con_cam', $conductor->dni_con)->first();

            if ($camion) {
                $viaje = $camion->viajes()->latest()->first();

                if ($viaje) {
                    $gastos = $viaje->gastos()->paginate();
                } else {
                    $gastos = collect(); // No hay viaje asociado, devolver una colección vacía.
                }
            } else {
                $gastos = collect(); // No hay camión asociado, devolver una colección vacía.
            }
        } else {
            // El usuario no es un conductor, obtener todos los gastos.
            $gastos = Gasto::paginate();
        }

        return view('gasto.index', compact('gastos'))
            ->with('i', $gastos->isEmpty() ? 0 : (request()->input('page', 1) - 1) * $gastos->perPage());    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gasto = new Gasto();
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $viajes = Viaje::pluck('cod_via', 'cod_via');
        return view('gasto.create', compact('gasto', 'categorias', 'viajes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gasto::$rules);

        $gasto = Gasto::create($request->all());

        return redirect()->route('gastos.index')
            ->with('success', 'Gasto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_gas
     * @return \Illuminate\Http\Response
     */
    public function show($cod_gas)
    {
        $gasto = Gasto::find($cod_gas);

        return view('gasto.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_gas
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_gas)
    {
        $gasto = Gasto::find($cod_gas);
        $categorias = CategoriasGasto::pluck('nom_cat_gas', 'cod_cat_gas');
        $viajes = Viaje::pluck('cod_via', 'cod_via');
        return view('gasto.edit', compact('gasto', 'categorias', 'viajes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gasto $gasto
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, gasto $gasto)
{
    // Validar los campos del formulario, excepto 'cod_via'
    $request->validate(Arr::except(gasto::$rules, 'cod_gas'));

    // Verificar si el valor de 'cod_gas' ha cambiado
    if ($request->input('cod_gas') !== $gasto->cod_gas) {
        // Validar 'cod_gas' como único en la tabla 'gastos'
        $request->validate([
            'cod_gas' => 'required|unique:gastos,cod_gas',
        ]);
    }

    // Actualizar los atributos del modelo gasto
    $gasto->update($request->all());

    return redirect()->route('gastos.index')->with('success', 'Gasto actualizado exitosamente');
}

    /**katherin <3
     * @param string $cod_gas
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_gas)
    {
        try {
            // Intenta eliminar el registro del camión
            $gasto = Gasto::find($cod_gas);
            if (!$gasto) {
                return redirect()->route('gastos.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El gasto no existe.
                                    </div>');
            }
    
            $gasto->delete();
    
            return redirect()->route('gastos.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Gasto eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el gasto: ' . $e->getMessage();
            }
    
            return redirect()->route('gastos.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}
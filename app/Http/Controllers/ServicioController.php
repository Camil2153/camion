<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Servicio;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Actividade;
use App\Models\Falla;
use App\Models\Tallere;
use App\Models\Camione;
use App\Models\Almacene;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */
class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:servicios.index')->only('index');
        $this->middleware('can:servicios.create')->only('create', 'store');
        $this->middleware('can:servicios.show')->only('show');
        $this->middleware('can:servicios.edit')->only('edit', 'update');
        $this->middleware('can:servicios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener los servicios paginados desde la base de datos
        $servicios = Servicio::paginate(10);
    
        // Definimos el mapeo de estados a colores
        $statusColors = [
            'No comenzada' => 'badge-dark',
            'En curso' => 'badge-info',
            'Aplazada' => 'badge-warning',
            'Cancelada' => 'badge-danger',
            'Completada' => 'badge-success',
        ];
    
        return view('servicio.index', compact('servicios', 'statusColors'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicio = new Servicio();
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        $fallasDisponibles = Falla::pluck('desc_fal', 'cod_fal');
        $fallasRegistrados = $servicio->pluck('fal_ser');
        $fallasFiltrados = $fallasDisponibles->except($fallasRegistrados);
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::where('est_alm', 'disponible')->pluck('com_alm', 'cod_alm');
        return view('servicio.create', compact('servicio', 'sistemas', 'actividades', 'fallasFiltrados', 'talleres', 'camiones', 'almacenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('fal_ser') && $request->get('fal_ser') !== null) {
            // Obtener el ID de la falla seleccionada
            $fallaId = $request->get('fal_ser');
            
            // Buscar la falla en la base de datos
            $falla = Falla::find($fallaId);
            
            // Si se encontró la falla en la base de datos
            if ($falla) {
                // Actualizar el estado de la falla a "En proceso de reparación"
                $falla->est_act_fal = 'proceso';
                $falla->save();
            }
        }
        
        request()->validate(Servicio::$rules);
        $servicio = Servicio::create($request->all());

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function show($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);

        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_ser
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_ser)
    {
        $servicio = Servicio::find($cod_ser);
        $sistemas = Sistema::pluck('nom_sis', 'cod_sis');
        $actividades = Actividade::pluck('nom_act', 'cod_act');
        $fallasFiltrados = $servicio->falla->desc_fal;
        $talleres = Tallere::pluck('nom_tal', 'nit_tal');
        $camiones = Camione::pluck('pla_cam', 'pla_cam');
        $almacenes = Almacene::where('est_alm', 'disponible')->pluck('com_alm', 'cod_alm');
        return view('servicio.edit', compact('servicio', 'sistemas', 'actividades', 'fallasFiltrados', 'talleres', 'camiones', 'almacenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicio $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate(Arr::except(Servicio::$rules, 'cod_ser'));
        if ($request->has('est_ser') && $request->est_ser === 'Completada') {
            if ($servicio->fal_ser) {
                $falla = Falla::findOrFail($servicio->fal_ser);
                $falla->est_act_fal = 'reparada';
                $falla->save();
            }
        }
        $servicio->update($request->all());

        $estadoServicio = $request->input('est_ser');

        if ($estadoServicio === 'No comenzada' || $estadoServicio === 'En curso') {
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'en mantenimiento';
            $camione->save();
        } elseif ($estadoServicio === 'Completada' || $estadoServicio === 'Cancelada' || $estadoServicio === 'Aplazada') {
            $camione = Camione::findOrFail($request->input('cam_ser'));
            $camione->est_cam = 'disponible';
            $camione->save();
        }

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio actualizado exitosamente');
    }

    /**
     * @param string $cod_ser
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_ser)
    {
        $servicio = Servicio::find($cod_ser)->delete();

        return redirect()->route('servicios.index')
            ->with('success', 'Servicio eliminado exitosamente');
    }
   
 
public function actualizarEstado(Request $request, $codigoServicio)
{
    // Valida el nuevo estado (opcional, si es necesario)
    $request->validate([
        'estado' => 'required|in:No comenzada,En curso,Aplazada,Cancelada,Completada'
    ]);

    // Encuentra el servicio por el código y actualiza su estado
    $servicio = Servicio::find($codigoServicio);
    $servicio->est_ser = $request->input('estado');
    $servicio->save();

    // Devuelve una respuesta JSON (opcional, para informar el resultado)
    return response()->json(['success' => true, 'message' => 'Estado actualizado exitosamente']);
}
}
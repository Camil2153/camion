<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Viaje;
use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Cliente;
use App\Models\Ruta;
use App\Models\Empresa;
use App\Models\Falla;
use App\Models\Sistema;
use Carbon\Carbon;
use App\Models\Servicio;
use App\Models\DocumentosCamione;
use App\Models\DocumentosConductore;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:viajes.index')->only('index');
        $this->middleware('can:viajes.create')->only('create', 'store');
        $this->middleware('can:viajes.show')->only('show');
        $this->middleware('can:viajes.edit')->only('edit', 'update');
        $this->middleware('can:viajes.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viaje = new Viaje();

        $camionesDisponibles = Camione::where('est_cam', 'disponible')->get();

        $camiones = $camionesDisponibles->pluck('pla_cam', 'pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');

        return view('viaje.create', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas', 'camionesDisponibles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod_via' => 'required',
            'car_via' => 'required',
            'pes_via' => 'required',
            'est_via' => 'required',
            'fec_sal_via' => 'required',
            'hor_sal_via' => 'required',
            'fec_lle_via' => 'required',
            'hor_lle_via' => 'required',
            'kil_via' => 'required',
            'com_via' => 'required',
            'cam_via' => 'required',
            'cli_via' => 'required',
            'rut_via' => 'required',
            'emp_via' => 'required',
        ]);

        $viaje = Viaje::create($request->all());

        $estadoViaje = $request->input('est_via');

        if ($estadoViaje === 'programado' || $estadoViaje === 'en progreso') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'fuera de servicio';
            $camione->save();
        } elseif ($estadoViaje === 'completado' || $estadoViaje === 'cancelado') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'disponible';
            $camione->save();
        }

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_via
     * @return \Illuminate\Http\Response
     */
    public function show($cod_via)
    {
        // Obtener el viaje específico utilizando su ID
        $viaje = Viaje::find($cod_via);
    
        // Obtener los datos necesarios para la predicción
        $kilometrajeRegistrado = $viaje->kil_via;
        $consumoCombustible = $viaje->com_via;
        $camione = $viaje->camione;
        $servicioAplicado = $camione->servicio()->first();
        $fechaUltMantenimiento = $camione->ult_mantenimiento; // Obtener la fecha de último mantenimiento del camión
        $complejidadRuta = $viaje->ruta->com_rut;
        $distanciaRuta = $viaje->ruta->dis_rut;
    
        // Verificar si el servicio aplicado existe y se encontró un servicio para el camión
        if ($servicioAplicado) {
            // Obtener el tipo de servicio
            $tipoServicio = $servicioAplicado->tiposServicio;
    
            if ($tipoServicio) {
                // Obtener la fecha más reciente de servicio para el camión
                $fechaUltServicio = Servicio::where('cam_ser', $camione->pla_cam)
                    ->orderByDesc('fec_ser')
                    ->value('fec_ser');
    
                if ($fechaUltServicio) {
                    $fechaProxMantenimiento = Carbon::parse($fechaUltServicio)->addDays($tipoServicio->int_tie_tip_ser);
    
                    // Definir las reglas de negocio para la predicción de fallas
                    $posiblesFallas = [];
                    $posiblesSistemas = [];
    
                    if ($kilometrajeRegistrado > $tipoServicio->int_kil_tip_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas debido al exceso de kilometraje registrado.';
                        $posiblesSistemas[] = 'Sistema de motor';
                    }
    
                    if ($consumoCombustible > 20) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas debido a un alto consumo de combustible.';
                        $posiblesSistemas[] = 'Sistema de combustible';
                    }
    
                    if ($fechaProxMantenimiento->diffInDays(now()) <= 7) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas debido a que el próximo servicio de mantenimiento está próximo.';
                        $posiblesSistemas[] = 'Sistema de mantenimiento';
                    }
    
                    if ($complejidadRuta === 'Difícil' && $distanciaRuta > 500) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas debido a la complejidad y distancia de la ruta.';
                        $posiblesSistemas[] = 'Sistema de suspensión';
                    }

                    // Reglas de negocio para las alertas de mantenimiento
                    if (!$servicioAplicado->ace_mot_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de motor debido a la necesidad de cambiar el aceite del motor y los filtros de aceite, aire y combustible según las recomendaciones del fabricante.';
                        $posiblesSistemas[] = 'Sistema de motor';
                    }

                    if (!$servicioAplicado->pas_fre_ser || !$servicioAplicado->des_dis_tam_ser || !$servicioAplicado->niv_cal_liq_fre_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de frenos debido a la necesidad de revisar y ajustar el sistema de frenos, pastillas de freno y nivel de líquido de frenos.';
                        $posiblesSistemas[] = 'Sistema de frenos';
                    }

                    if (!$servicioAplicado->aju_lub_com_sus_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de suspensión debido a la necesidad de inspeccionar y ajustar los componentes de la suspensión durante los servicios de mantenimiento programados.';
                        $posiblesSistemas[] = 'Sistema de suspensión';
                    }

                    if (!$servicioAplicado->cre_dir_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de dirección debido a la necesidad de verificar y ajustar el sistema de dirección durante los servicios de mantenimiento programados.';
                        $posiblesSistemas[] = 'Sistema de dirección';
                    }

                    if (!$servicioAplicado->exa_sis_esc_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de escape debido a la necesidad de realizar inspecciones periódicas en el sistema de escape para verificar su estado y funcionamiento.';
                        $posiblesSistemas[] = 'Sistema de escape';
                    }

                    if (!$servicioAplicado->fun_luc_ser || !$servicioAplicado->ins_cab_ser || !$servicioAplicado->con_ele_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema eléctrico debido a la necesidad de realizar inspecciones regulares en el sistema eléctrico para verificar el estado de las luces, el cableado y los conectores.';
                        $posiblesSistemas[] = 'Sistema eléctrico';
                    }

                    if (!$servicioAplicado->rot_neu_ser || !$servicioAplicado->ree_neu_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de neumáticos debido a la necesidad de verificar periódicamente la presión de los neumáticos y realizar inspecciones visuales en busca de desgaste o daños.';
                        $posiblesSistemas[] = 'Sistema de neumáticos';
                    }

                    if (!$servicioAplicado->niv_cal_liq_ref_ser || !$servicioAplicado->ins_rad_man_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de refrigeración debido a la necesidad de verificar el sistema de refrigeración y el nivel de líquido refrigerante durante los servicios de mantenimiento programados.';
                        $posiblesSistemas[] = 'Sistema de refrigeración';
                    }

                    if (!$servicioAplicado->liq_tra_ser || !$servicioAplicado->rev_emb_ser || !$servicioAplicado->niv_cal_liq_tra_ser) {
                        $posiblesFallas[] = 'Se predice una mayor probabilidad de fallas en el sistema de transmisión y embrague debido a la necesidad de cambiar el líquido de la transmisión y revisar el embrague según las indicaciones del fabricante.';
                        $posiblesSistemas[] = 'Sistema de transmisión y embrague';
                    }
        
                    // Obtener las fallas registradas previamente asociadas al camión
                    $fallasRegistradas = Falla::where('cam_fal', $camione->pla_cam)->get();

                    $registrosFallas = [];
                    foreach ($fallasRegistradas as $fallaRegistrada) {
                        $registrosFallas[] = [
                            'fecha' => $fallaRegistrada->fec_fal,
                            'descripcion' => $fallaRegistrada->desc_fal,
                            'sistema' => $fallaRegistrada->sistema->nom_sis,
                        ];
                    }

                    // Verificar la fecha de vencimiento de los documentos del camión
                    $documentoCamion = DocumentosCamione::where('cam_doc_cam', $camione->pla_cam)->first();

                    if ($documentoCamion && $documentoCamion->vig_doc_cam !== null) {
                        $fechaVencimientoDocumentoCamion = Carbon::parse($documentoCamion->vig_doc_cam);
                        $diasRestantes = $fechaVencimientoDocumentoCamion->diffInDays(now());

                        if ($diasRestantes <= 30) {
                            $posiblesAlertas[] = 'El documento ' . $documentoCamion->nom_doc_cam . ' está próximo a vencerse. Quedan ' . $diasRestantes . ' días.';
                        }
                    }

                    // Verificar la fecha de vencimiento de la licencia del conductor
                    $documentoConductor = DocumentosConductore::where('con_doc_con', $camione->con_cam)->first();

                    if ($documentoConductor && $documentoConductor->fec_ven_lic_doc_con !== null) {
                        $fechaVencimientoLicenciaConductor = Carbon::parse($documentoConductor->fec_ven_lic_doc_con);
                        $diasRestantesLicencia = now()->diffInDays($fechaVencimientoLicenciaConductor);

                        if ($diasRestantesLicencia <= 30) {
                            $posiblesAlertas[] = 'La licencia del conductor está próxima a vencerse. Quedan ' . $diasRestantesLicencia . ' días.';
                        }
                    }
   
                    // Pasar los posibles fallos y sistemas a la vista correspondiente
                    return view('viaje.show', compact('viaje', 'posiblesFallas', 'posiblesSistemas', 'registrosFallas', 'posiblesAlertas'));
                }
            }
        }
    
        // El servicio aplicado no fue encontrado o no se encontró ningún servicio para el camión
        // Manejar el caso en consecuencia
        $mensaje = 'No se encontró información de servicio para el camión. Verifica los registros.';
        return view('viaje.show', compact('viaje', 'mensaje'));
    }        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_via
     * @return \Illuminate\Http\Response
     */
 public function edit($cod_via)
{
    $viaje = Viaje::find($cod_via);
    $camiones = Camione::where('est_cam', 'disponible')->pluck('pla_cam', 'pla_cam');
    $clientes = Cliente::pluck('nom_cli', 'cod_cli');
    $rutas = Ruta::pluck('nom_rut', 'cod_rut');
    $empresas = Empresa::pluck('nom_emp', 'nit_emp');

    // Obtén todos los camiones disponibles
    $camionesDisponibles = Camione::where('est_cam', 'disponible')->get();

    // Pluck solo los camiones disponibles para usar en el formulario de edición
    $camiones = $camionesDisponibles->pluck('pla_cam', 'pla_cam')->toArray();

    // Agrega el camión asignado al viaje actual a la lista de camiones disponibles
    // Esto asegura que el camión asignado siempre aparezca en el formulario
    if (!in_array($viaje->cam_via, $camiones)) {
        $camiones[$viaje->cam_via] = $viaje->cam_via;
    }

    return view('viaje.edit', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viaje $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        // Validar los campos del formulario, excepto 'cod_via'
        $request->validate(Arr::except(Viaje::$rules, 'cod_via'));

        // Verificar si el valor de 'cod_via' ha cambiado
        if ($request->input('cod_via') !== $viaje->cod_via) {
            // Validar 'cod_via' como único en la tabla 'viajes'
            $request->validate([
                'cod_via' => 'required|unique:viajes,cod_via',
                'car_via' => 'required',
                'pes_via' => 'required',
                'est_via' => 'required',
                'fec_sal_via' => 'required',
                'hor_sal_via' => 'required',
                'fec_lle_via' => 'required',
                'hor_lle_via' => 'required',
                'kil_via' => 'required',
                'com_via' => 'required',
                'cam_via' => 'required',
                'cli_via' => 'required',
                'rut_via' => 'required',
                'emp_via' => 'required',
            ]);
        }

        // Actualizar los atributos del modelo Viaje
        $viaje->update($request->all());

        $estadoViaje = $request->input('est_via');

        if ($estadoViaje === 'programado' || $estadoViaje === 'en progreso') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'fuera de servicio';
            $camione->save();
        } elseif ($estadoViaje === 'completado' || $estadoViaje === 'cancelado') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'disponible';
            $camione->save();
        }

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje actualizado exitosamente.');
    }

    /**
     * @param string $cod_via
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_via)
    {
        $viaje = Viaje::find($cod_via)->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Viaje eliminado exitosamente');
    }

}
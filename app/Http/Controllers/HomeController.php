<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Ruta;
use App\Models\Falla;
use Illuminate\Support\Facades\DB;
use App\Models\Gasto;
use App\Models\Conductore;
use App\Models\Viaje;
use App\Models\Sistema;
use App\Models\Servicio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Tu lógica para obtener los datos de la tabla de gastos
        $gastos = Gasto::all();
    
        // Verifica si hay gastos pendientes
        $gastosPendientes = $gastos->contains('est_gas', 'pendiente');
    
        // Obtener el número de registros en la tabla "camiones"
        $totalCamiones = Camione::count();
        
        // Obtener el número de camiones cuyo estado es "fuera de servicio"
        $camionesFueraDeServicio = Camione::where('est_cam', 'fuera de servicio')->count();
        
        // Obtener el número de registros en la tabla "Viajes"
        $totalViajes = Viaje::count();
        
        // Obtener el número de registros en la tabla "fallas"
        $totalFallas = Falla::where('est_act_fal', 'pendiente')
        ->orWhere('est_act_fal', 'en proceso')
        ->count();

        $viajes = Viaje::all(); // Obtén los viajes desde tu modelo o consulta
        
        // Verificar si el usuario autenticado es un administrador o coordinador
        $esAdmin = auth()->user()->hasRole('Administrador');
        $esCoordinador = auth()->user()->hasRole('Coordinador');

        $conductoresPorExperiencia = Conductore::select(DB::raw('año_exp_con, COUNT(*) as total'))
        ->groupBy('año_exp_con')
        ->get();

        $evolucionGastosData = Gasto::where('est_gas', 'aprobado')
        ->orderBy('fec_gas')
        ->get(['fec_gas', 'mon_gas']);

        $estadosFallaPorSistema = Falla::select(
            'sistemas.nom_sis',
            DB::raw('SUM(CASE WHEN est_act_fal = "pendiente" THEN 1 ELSE 0 END) AS pendiente'),
            DB::raw('SUM(CASE WHEN est_act_fal = "proceso" THEN 1 ELSE 0 END) AS proceso'),
            DB::raw('SUM(CASE WHEN est_act_fal = "reparada" THEN 1 ELSE 0 END) AS reparada')
        )
        ->join('sistemas', 'fallas.sis_fal', '=', 'sistemas.cod_sis')
        ->groupBy('fallas.sis_fal', 'sistemas.nom_sis')
        ->get();

        // Obtener la cantidad de servicios por sistema
        $serviciosPorSistema = Servicio::select(
            'sistemas.nom_sis',
            DB::raw('COUNT(*) as cantidad')
        )
        ->join('sistemas', 'servicios.sis_ser', '=', 'sistemas.cod_sis')
        ->groupBy('sistemas.nom_sis')
        ->get();

        // Calcular el total de servicios
        $totalServicios = $serviciosPorSistema->sum('cantidad');

        // Calcular los porcentajes de servicios por sistema
        $porcentajes = $serviciosPorSistema->map(function ($item) use ($totalServicios) {
            $porcentaje = ($item->cantidad / $totalServicios) * 100;
            return [
                'nom_sis' => $item->nom_sis,
                'cantidad' => $item->cantidad,
                'porcentaje' => round($porcentaje, 2), // Redondear a 2 decimales
            ];
        });

        // Obtener la cantidad de camiones fuera de servicio
        $cantidadCamionesFueraDeServicio = Camione::where('est_cam', 'fuera de servicio')->count();

        // Obtener la cantidad de camiones fuera de servicio desde la última visita
        $cantidadNuevosCamionesFueraDeServicio = $cantidadCamionesFueraDeServicio - session('cantidad_camiones_fuera_de_servicio', $cantidadCamionesFueraDeServicio);

        // Actualizar la cantidad en la variable de sesión
        session(['cantidad_camiones_fuera_de_servicio' => $cantidadCamionesFueraDeServicio]);

        $fallasPorRuta = Falla::select('rutas.nom_rut', DB::raw('COUNT(*) as total'))
        ->leftJoin('rutas', 'fallas.rut_fal', '=', 'rutas.cod_rut')
        ->groupBy('rutas.nom_rut')
        ->get();

        $tiempoInactividadPorCamion = DB::table('trazabilidad')
        ->join('viajes', 'trazabilidad.via_tra', '=', 'viajes.cod_via') // Asegúrate de usar la relación correcta entre trazabilidad y viajes.
        ->join('camiones', 'viajes.cam_via', '=', 'camiones.pla_cam')
        ->where('trazabilidad.fin_ina_tra', '>', 0) // Filtra aquellos con tiempo de inactividad mayor a 0
        ->select('camiones.pla_cam', DB::raw('SUM(trazabilidad.fin_ina_tra) as tiempo_inactividad'))
        ->groupBy('camiones.pla_cam')
        ->get();
    

        // Pasar los valores a la vista
        return view('home', [
            'gastosPendientes' => $gastosPendientes,
            'totalCamiones' => $totalCamiones,
            'camionesFueraDeServicio' => $camionesFueraDeServicio,
            'totalViajes' => $totalViajes,
            'totalFallas' => $totalFallas,
            'esAdmin' => $esAdmin,
            'esCoordinador' => $esCoordinador,
            'conductoresPorExperiencia' =>$conductoresPorExperiencia,
            'viajes' => $viajes,
            'evolucionGastosData' => $evolucionGastosData,
            'estadosFallaPorSistema' => $estadosFallaPorSistema,
            'porcentajesServicios' => $porcentajes,
            'cantidadNuevosCamionesFueraDeServicio' => $cantidadNuevosCamionesFueraDeServicio,
            'fallasPorRuta' => $fallasPorRuta,
            'tiempoInactividadPorCamion' => $tiempoInactividadPorCamion,
        ]);
    }  
    
    public function mostrarCamionesFueraDeServicio()
    {
        // Obtener los camiones fuera de servicio
        $camionesFueraDeServicio = Camione::where('est_cam', 'fuera de servicio')->get();
    
        // Marcar los camiones como "vistos" para que el icono desaparezca
        session(['cantidad_camiones_fuera_de_servicio' => $camionesFueraDeServicio->count()]);
    
        // Pasar los camiones a la vista
        return view('camione.index', ['camiones' => $camionesFueraDeServicio]);
    }  

    public function mostrarFallasPendientesEnProceso()
    {
        // Obtener las fallas en estado "pendiente" o "en proceso"
        $fallasPendientesEnProceso = Falla::whereIn('est_act_fal', ['pendiente', 'en proceso'])->get();

        // Marcar las fallas como "vistas" para que el icono desaparezca
        session(['cantidad_fallas_pendientes_en_proceso' => $fallasPendientesEnProceso->count()]);

        // Pasar las fallas a la vista
        return view('falla.index', ['fallas' => $fallasPendientesEnProceso]);
    }
}
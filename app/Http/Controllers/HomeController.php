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
        
        // Obtener el número de registros en la tabla "rutas"
        $totalRutas = Ruta::count();
        
        // Obtener el número de registros en la tabla "fallas"
        $totalFallas = Falla::count();

        $viajes = Viaje::all(); // Obtén los viajes desde tu modelo o consulta
        
        // Verificar si el usuario autenticado es un administrador
        $esAdmin = auth()->user()->hasRole('Administrador');

        $conductoresPorExperiencia = Conductore::select(DB::raw('año_exp_con, COUNT(*) as total'))
        ->groupBy('año_exp_con')
        ->get();

        $evolucionGastosData = Gasto::where('est_gas', 'aprobado')
        ->orderBy('fec_gas')
        ->get(['fec_gas', 'mon_gas']);

        // Obtener los datos para el gráfico de burbujas
        $viajesData = Viaje::select('viajes.com_via', 'viajes.pes_via', 'viajes.est_via', 'rutas.dur_rut')
        ->join('rutas', 'viajes.rut_via', '=', 'rutas.cod_rut')
        ->get();

        // Procesar la duración de la ruta para convertirla en minutos
        foreach ($viajesData as &$viaje) {
            $duracionRuta = $viaje->dur_rut;
            $pattern = '/(\d+)\s*([a-zA-Z]+)/';
            preg_match_all($pattern, $duracionRuta, $matches);

            $totalMinutes = 0;
            $timeUnits = [
                'día' => 24 * 60,
                'días' => 24 * 60,
                'hora' => 60,
                'horas' => 60,
                'minuto' => 1,
                'minutos' => 1,
            ];

            foreach ($matches[1] as $key => $value) {
                $unit = strtolower($matches[2][$key]);
                if (isset($timeUnits[$unit])) {
                    $totalMinutes += $value * $timeUnits[$unit];
                }
            }

            $viaje->duracion = $totalMinutes;
        }

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

        // Pasar los valores a la vista
        return view('home', [
            'gastosPendientes' => $gastosPendientes,
            'totalCamiones' => $totalCamiones,
            'camionesFueraDeServicio' => $camionesFueraDeServicio,
            'totalRutas' => $totalRutas,
            'totalFallas' => $totalFallas,
            'esAdmin' => $esAdmin,
            'conductoresPorExperiencia' =>$conductoresPorExperiencia,
            'viajes' => $viajes,
            'evolucionGastosData' => $evolucionGastosData,
            'viajesData' => $viajesData,
            'estadosFallaPorSistema' => $estadosFallaPorSistema,
            'porcentajesServicios' => $porcentajes
        ]);
    }  
    
    public function mostrarCamionesFueraDeServicio()
    {
        // Obtener los camiones con estado "fuera de servicio"
        $camionesFueraDeServicio = Camione::where('est_cam', 'fuera de servicio')->get();

        // Pasar los camiones a la vista
        return view('camione.index', ['camiones' => $camionesFueraDeServicio]);
    }  
    
}
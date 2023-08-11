<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Ruta;
use App\Models\Falla;
use Illuminate\Support\Facades\DB;

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
        // Obtener el número de registros en la tabla "camiones"
        $totalCamiones = Camione::count();
    
        // Obtener el número de camiones cuyo estado es "fuera de servicio"
        $camionesFueraDeServicio = Camione::where('est_cam', 'fuera de servicio')->count();
    
        // Obtener el número de registros en la tabla "rutas"
        $totalRutas = Ruta::count();
    
        // Obtener el número de registros en la tabla "fallas"
        $totalFallas = Falla::count();

        $fallasPorMes = Falla::select(DB::raw('MONTH(fec_fal) as mes'), DB::raw('COUNT(*) as total'))
        ->groupBy('mes')
        ->get();
        
        // Pasar los valores a la vista
        return view('home', [
            'fallasPorMes' => $fallasPorMes,
            'totalCamiones' => $totalCamiones,
            'camionesFueraDeServicio' => $camionesFueraDeServicio,
            'totalRutas' => $totalRutas,
            'totalFallas' => $totalFallas
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

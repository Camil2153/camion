<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Camione; // Añadir el modelo Camione

class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:consultas.index')->only('index');
    }

    public function index(Request $request)
    {
        // Obtener todos los camiones para el desplegable
        $camiones = Camione::all();
    
        $selectedCamion = $request->input('camion'); // Obtener el camión seleccionado
    
        if ($request->has('date_range')) {
            list($startDate, $endDate) = explode(' - ', $request->input('date_range'));
            
            $query = Viaje::with('ruta')
                ->leftJoin('trazabilidad', 'viajes.cod_via', '=', 'trazabilidad.via_tra')
                ->whereBetween('viajes.fec_sal_via', [$startDate, $endDate]);
            
            // Si se seleccionó un camión, aplicar el filtro por camión
            if (!empty($selectedCamion)) {
                $query->where('viajes.cam_via', $selectedCamion);
            }
    
            $viajes = $query->get();
        } else {
            $viajes = [];
        }
    
        return view('consultas', compact('viajes', 'camiones', 'selectedCamion')); // Pasar la variable $camiones y $selectedCamion a la vista
    }
    
}

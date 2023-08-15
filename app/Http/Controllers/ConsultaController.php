<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Viaje;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('date_range')) {
            list($startDate, $endDate) = explode(' - ', $request->input('date_range'));
            $viajes = Viaje::with('ruta')
            ->leftJoin('trazabilidad', 'viajes.cod_via', '=', 'trazabilidad.via_tra')
            ->whereBetween('viajes.fec_sal_via', [$startDate, $endDate])
            ->get();
        } else {
            $viajes = [];
        }

        return view('consultas', compact('viajes'));
    }
}

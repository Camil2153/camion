<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Camione;
use Carbon\Carbon;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:reportes.index')->only('index');
    }

    public function index(Request $request)
    {
        $startDate = null;
        $endDate = null;

        if ($request->has('date_range')) {
            $dateRange = $request->input('date_range');
            list($startDate, $endDate) = explode(' - ', $dateRange);

            if (!empty($startDate) && !empty($endDate)) {
                $startDate = Carbon::parse($startDate);
                $endDate = Carbon::parse($endDate);
            }
        }

        $selectedReportType = $request->input('report_type');
        $camiones = null;
        $documentosCamiones = null;
        $serviciosCamiones = null;
        
        $selectedCamion = $request->input('camion');
        $baseQuery = DB::table('camiones');
        if (!empty($selectedCamion)) {
            $baseQuery->where('camiones.pla_cam', '=', $selectedCamion);
        }

        if ($selectedReportType === 'listado_camiones') {
            $camiones = $baseQuery
                ->leftJoin('viajes', function ($join) use ($startDate, $endDate) {
                    $join->on('camiones.pla_cam', '=', 'viajes.cam_via')
                        ->whereBetween('viajes.fec_sal_via', [$startDate, $endDate])
                        ->where('viajes.est_via', '=', 'completado');
                })
                ->leftJoin('fallas', function ($join) use ($startDate, $endDate) {
                    $join->on('camiones.pla_cam', '=', 'fallas.cam_fal')
                        ->whereBetween('fallas.fec_fal', [$startDate, $endDate]);
                })
                ->leftJoin('servicios', function ($join) use ($startDate, $endDate) {
                    $join->on('camiones.pla_cam', '=', 'servicios.cam_ser')
                        ->whereBetween('servicios.fec_ser', [$startDate, $endDate])
                        ->where('servicios.est_ser', '=', 'completada');
                })
                ->select(
                    'camiones.pla_cam',
                    DB::raw('COUNT(DISTINCT viajes.cod_via) AS viajes_count'),
                    DB::raw('COUNT(DISTINCT fallas.cod_fal) AS fallas_count'),
                    DB::raw('COUNT(DISTINCT CASE WHEN servicios.tip_ser = "preventivo" THEN servicios.cod_ser END) AS mantenimiento_preventivo_count'),
                    DB::raw('COUNT(DISTINCT CASE WHEN servicios.tip_ser = "correctivo" THEN servicios.cod_ser END) AS mantenimiento_correctivo_count')
                )
                ->groupBy('camiones.pla_cam')
                ->havingRaw('COUNT(DISTINCT viajes.cod_via) > 0 OR COUNT(DISTINCT fallas.cod_fal) > 0 OR COUNT(DISTINCT servicios.cod_ser) > 0')
                ->get();

        } elseif ($selectedReportType === 'listado_documentos') {
            $documentosCamiones = $baseQuery
                ->join('documentos_camiones', 'documentos_camiones.cam_doc_cam', '=', 'camiones.pla_cam')
                ->select(
                    'camiones.pla_cam as camion_pla_cam',
                    'documentos_camiones.nom_doc_cam',
                    'documentos_camiones.vig_doc_cam',
                    DB::raw('CASE 
                        WHEN DATE(documentos_camiones.vig_doc_cam) < DATE(NOW()) THEN CONCAT("Venció hace ", ABS(DATEDIFF(DATE(NOW()), DATE(documentos_camiones.vig_doc_cam))), " días.")
                        WHEN DATE(documentos_camiones.vig_doc_cam) = DATE(NOW()) THEN "Vence hoy."
                        ELSE DATEDIFF(DATE(documentos_camiones.vig_doc_cam), DATE(NOW()))
                    END AS dias_restantes')
                )
                ->whereBetween('documentos_camiones.updated_at', [$startDate, $endDate])
                ->get();

        } elseif ($selectedReportType === 'listado_servicios') {
            $serviciosCamiones = DB::table('servicios')
                ->join('sistemas', 'servicios.sis_ser', '=', 'sistemas.cod_sis')
                ->join('actividades', 'servicios.act_ser', '=', 'actividades.cod_act')
                ->joinSub(function ($join) use ($startDate, $endDate) {
                    $join->select('camiones.pla_cam as camion_pla_cam')
                        ->from('camiones')
                        ->whereBetween('camiones.created_at', [$startDate, $endDate]);
                }, 'camion_data', 'camion_data.camion_pla_cam', '=', 'servicios.cam_ser')
                ->select(
                    'camion_data.camion_pla_cam',
                    'sistemas.nom_sis',
                    'actividades.nom_act',
                    'servicios.tip_ser',
                    'servicios.fec_ser'
                )
                ->where('servicios.est_ser', '=', 'completada')
                ->get();

        } elseif ($selectedReportType === 'inventario_camiones') {
            $camiones = $baseQuery
            ->select(
                'pla_cam',
                'mod_cam',
                'est_cam',
                'kil_cam'
            )
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();
        }
        
        $camionesDropdown = DB::table('camiones')->select('pla_cam')->get();

        return view('reportes', [
            'camiones' => $camiones,
            'documentosCamiones' => $documentosCamiones,
            'serviciosCamiones' => $serviciosCamiones,
            'selectedReportType' => $selectedReportType,
            'camionesDropdown' => $camionesDropdown,
            'selectedCamion' => $selectedCamion,
        ]);
    }
}
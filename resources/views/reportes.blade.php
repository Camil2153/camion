@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Reportes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form>
            <div class="box-body form-grid">
                <div class="form-group">
                    <label for="date_range">Intervalo de Fechas:</label>
                    <input type="text" name="date_range" id="date_range" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="camion">Camión:</label>
                    <select name="camion" id="camion" class="form-control">
                        <option value="">Seleccionar camión</option>
                        @foreach($camionesDropdown as $camionOption)
                            <option value="{{ $camionOption->pla_cam }}">{{ $camionOption->pla_cam }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="report_type">Reporte:</label>
                <select name="report_type" id="report_type" class="form-control">
                    <option value="">Seleccionar tipo de reporte</option>
                    <option value="listado_camiones">Listado General de Camiones</option>
                    <option value="listado_documentos">Listado General de Documentos de Camiones</option>
                    <option value="listado_servicios">Listado General de Servicios</option>
                    <option value="listado_gastos">Listado General de Gastos</option>
                    <option value="inventario_camiones">Inventario de Camiones</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success btn-sm custom-btn">Generar reporte</button>
            </div>
        </form>
    </div>
</div>

@if ($selectedReportType === 'listado_camiones')
<div class="card">
    <div class="card-body">
        <h2>Listado General de Camiones</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Camión</th>
                    <th>Viajes</th>
                    <th>Fallas</th>
                    <th>Mantenimientos Preventivos</th>
                    <th>Mantenimientos Correctivos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($camiones as $camion)
                <tr>
                    <td>{{ $camion->pla_cam }}</td>
                    <td>{{ $camion->viajes_count }}</td>
                    <td>{{ $camion->fallas_count }}</td>
                    <td>{{ $camion->mantenimiento_preventivo_count }}</td>
                    <td>{{ $camion->mantenimiento_correctivo_count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('reportes.pdf', ['date_range' => request('date_range'), 'camion' => request('camion'), 'report_type' => request('report_type')]) }}" class="btn btn-outline-primary btn-sm">PDF</a>
        </div>
    </div>
</div>

@elseif ($selectedReportType === 'listado_documentos')
<div class="card">
    <div class="card-body">
        <h2>Listado General de Documentos de Camiones</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Camión</th>
                    <th>Documento</th>
                    <th>Vigencia</th>
                    <th>Días Restantes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documentosCamiones as $documento)
                <tr>
                    <td>{{ $documento->camion_pla_cam }}</td>
                    <td>{{ $documento->nom_doc_cam }}</td>
                    <td>{{ $documento->vig_doc_cam }}</td>
                    <td>{{ $documento->dias_restantes }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('reportes.pdf', ['date_range' => request('date_range'), 'camion' => request('camion'), 'report_type' => 'listado_documentos']) }}" class="btn btn-outline-primary btn-sm">PDF</a>
        </div>
    </div>
</div>

@elseif ($selectedReportType === 'listado_servicios')
<div class="card">
    <div class="card-body">
        <h2>Listado General de Servicios</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Camión</th>
                    <th>Sistema</th>
                    <th>Actividad</th>
                    <th>Tipo de Servicio</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($serviciosCamiones as $servicio)
                <tr>
                    <td>{{ $servicio->camion_pla_cam }}</td>
                    <td>{{ $servicio->nom_sis }}</td>
                    <td>{{ $servicio->nom_act }}</td>
                    <td>{{ $servicio->tip_ser }}</td>
                    <td>{{ $servicio->fec_ser }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('reportes.pdf', ['date_range' => request('date_range'), 'camion' => request('camion'), 'report_type' => 'listado_servicios']) }}" class="btn btn-outline-primary btn-sm">PDF</a>
        </div>
    </div>
</div>

@elseif ($selectedReportType === 'listado_gastos')
<div class="card">
    <div class="card-body">
        <h2>Listado General de Gastos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Viaje</th>
                    <th>Camión</th>
                    <th>Categoría</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gastos as $gasto)
                <tr>
                    <td>{{ $gasto->viaje}}</td>
                    <td>{{ $gasto->camion }}</td>
                    <td>{{ $gasto->categoria }}</td>
                    <td>{{ $gasto->monto }}</td>
                    <td>{{ $gasto->fecha }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('reportes.pdf', ['date_range' => request('date_range'), 'camion' => request('camion'), 'report_type' => 'listado_gastos']) }}" class="btn btn-outline-primary btn-sm">PDF</a>
        </div>
    </div>
</div>

@elseif ($selectedReportType === 'inventario_camiones')
<div class="card">
    <div class="card-body">
        <h2>Inventario de Camiones</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Camión</th>
                    <th>Modelo</th>
                    <th>Estado</th>
                    <th>Kilometraje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($camiones as $camion)
                <tr>
                    <td>{{ $camion->pla_cam }}</td>
                    <td>{{ $camion->mod_cam }}</td>
                    <td>{{ $camion->est_cam }}</td>
                    <td>{{ $camion->kil_cam }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        <div class="text-right">
            <a href="{{ route('reportes.pdf', ['date_range' => request('date_range'), 'camion' => request('camion'), 'report_type' => 'inventario_camiones']) }}" class="btn btn-outline-primary btn-sm">PDF</a>
        </div>
    </div>
</div>
@endif

@stop

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>
<script>
$(function() {
    $('#date_range').daterangepicker({
        opens: 'left',
        locale: {
            format: 'YYYY-MM-DD',
            applyLabel: 'Aplicar',
            cancelLabel: 'Cancelar',
            customRangeLabel: 'Seleccionar Intervalo'
        }
    });
});
</script>

<style>
/* Agregamos estilos para la cuadrícula */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    /* Dos columnas con el mismo ancho */
    gap: 10px;
    /* Espacio del 10% entre las columnas */
}
</style>
@stop
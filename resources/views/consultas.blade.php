@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Consultas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="date_range">Intervalo de Fechas:</label>
                <input type="text" name="date_range" id="date_range" class="form-control" />
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success btn-sm custom-btn">Realizar Consulta</button>
            </div>
        </form>
        @if(count($viajes) > 0)
        <div class="card mt-3">
            <div class="card-body">
                <h3>Resultados de la Consulta:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Carga</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Estado</th>
                            <th>Fecha y Hora</th>
                            <th>Camión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $estadoViajes = [];

                            foreach ($viajes as $viaje) {
                                $estados = [
                                    'programado' => $viaje->dat_pro_tra ? strtotime($viaje->dat_pro_tra . ' ' . $viaje->tim_pro_tra) : null,
                                    'en progreso' => $viaje->dat_enp_tra ? strtotime($viaje->dat_enp_tra . ' ' . $viaje->tim_enp_tra) : null,
                                    'completado' => $viaje->dat_com_tra ? strtotime($viaje->dat_com_tra . ' ' . $viaje->tim_com_tra) : null,
                                    'cancelado' => $viaje->dat_can_tra ? strtotime($viaje->dat_can_tra . ' ' . $viaje->tim_can_tra) : null,
                                ];

                                foreach ($estados as $estado => $fechaHora) {
                                    if ($fechaHora) {
                                        $estadoViajes[] = [
                                            'viaje' => $viaje,
                                            'estado' => $estado,
                                            'fechaHora' => $fechaHora,
                                        ];
                                    }
                                }
                            }

                            usort($estadoViajes, function ($a, $b) {
                                return $b['fechaHora'] - $a['fechaHora'];
                            });
                        @endphp

                        @foreach($estadoViajes as $estadoViaje)
                            <tr>
                                <td style="color: red;"><strong>{{ $estadoViaje['viaje']->cod_via }}</strong></td>
                                <td>{{ $estadoViaje['viaje']->car_via }}</td>
                                <td>{{ $estadoViaje['viaje']->ruta->ori_rut }}</td>
                                <td>{{ $estadoViaje['viaje']->ruta->des_rut }}</td>
                                <td>
                                    @if ($estadoViaje['estado'] === 'completado')
                                        <span class="badge badge-success">{{ $estadoViaje['estado'] }}</span>
                                    @elseif ($estadoViaje['estado'] === 'cancelado')
                                        <span class="badge badge-danger">{{ $estadoViaje['estado'] }}</span>
                                    @elseif ($estadoViaje['estado'] === 'en progreso')
                                        <span class="badge badge-warning">{{ $estadoViaje['estado'] }}</span>
                                    @elseif ($estadoViaje['estado'] === 'programado')
                                        <span class="badge badge-primary">{{ $estadoViaje['estado'] }}</span>
                                    @endif
                                </td>
                                <td>{{ date('Y-m-d, H:i:s', $estadoViaje['fechaHora']) }}</td>
                                <td>{{ $estadoViaje['viaje']->cam_via }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
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
@stop
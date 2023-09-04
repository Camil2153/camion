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
                <div class="form-group">
                    <label for="camion">Seleccionar Camión:</label>
                    <select name="camion" id="camion" class="form-control">
                        <option value="">Seleccionar Camión</option>
                        @foreach($camiones as $camione)
                            <option value="{{ $camione->pla_cam }}">{{ $camione->pla_cam }}</option>
                        @endforeach
                    </select>
                </div>
                <div class= "text-center">
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
                        <th>Camion</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th><span class="badge badge-info">Programado</span></th>
                        <th><span class="badge badge-warning">En progreso</span></th>
                        <th><span class="badge badge-success">Completado</span></th>
                        <th><span class="badge badge-danger">Cancelado</span></th>
                        <th><span class="badge badge-secondary">Inactivo</span></th>
                    </tr>
                </thead>
                <tbody>
                                    @foreach($viajes as $viaje)
                        <tr>
                            <td style="color: red;">{{ $viaje->cod_via }}</td>
                            <td>{{ $viaje->cam_via }}</td>
                            <td>{{ $viaje->ruta->ori_rut }}</td>
                            <td>{{ $viaje->ruta->des_rut }}</td>
                            <td style="background-color: rgba(0, 0, 255, 0.2)">{{ $viaje->dat_pro_tra }}, {{ $viaje->tim_pro_tra }}</td>
                            <td style="background-color: rgba(255, 255, 0, 0.2)">{{ $viaje->dat_enp_tra }}, {{ $viaje->tim_enp_tra }}</td>
                            <td style="background-color: rgba(0, 255, 0, 0.2)">{{ $viaje->dat_com_tra }}, {{ $viaje->tim_com_tra }}</td>
                            <td style="background-color: rgba(255, 0, 0, 0.2)">{{ $viaje->dat_can_tra }}, {{ $viaje->tim_can_tra }}</td>
                            <td style="background-color: rgba(128, 128, 128, 0.2)">{{ $viaje->fin_ina_tra }}</td>
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
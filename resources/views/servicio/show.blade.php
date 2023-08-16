@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Servicio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $servicio->cod_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $servicio->fec_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema:</strong>
                            {{ $servicio->sistema->nom_sis }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $servicio->actividade->nom_act }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $servicio->est_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Servicio:</strong>
                            {{ $servicio->tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Falla:</strong>
                            {{ $servicio->falla->desc_fal ?? 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $servicio->det_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $servicio->camione->pla_cam }}
                        </div>
                        <div class="form-group">
                            <strong>Taller:</strong>
                            {{ $servicio->tallere->nom_tal ?? 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $servicio->res_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Intervalo:</strong>
                            {{ $servicio->tip_int_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo:</strong>
                            {{ $servicio->int_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Avisar:</strong>
                            {{ $servicio->int_ale_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Alerta:</strong>
                            {{ $servicio->ale_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ number_format($servicio->cos_ser, 2, ',', '.') }}
                        </div>
                        <div class="form-group">
                            <strong>Almacen:</strong>
                            {{ $servicio->almacene->com_alm ?? 'N/A' }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $servicio->can_ser }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
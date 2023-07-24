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
                            <strong>Intervalo de Tiempo:</strong>
                            {{ $servicio->int_tie_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo de Kilometraje:</strong>
                            {{ $servicio->int_kil_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Alerta:</strong>
                            {{ $servicio->ale_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $servicio->cos_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Almacen:</strong>
                            {{ $servicio->almacene->com_alm ?? 'N/A' }}
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
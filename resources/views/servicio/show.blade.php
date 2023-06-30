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
                            <strong>Tipo de Servicio:</strong>
                            {{ $servicio->tiposServicio->nom_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $servicio->cam_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $servicio->desc_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $servicio->fec_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $servicio->kil_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $servicio->cos_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $servicio->res_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Taller:</strong>
                            {{ $servicio->tallere->nom_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $servicio->empresa->nom_emp }}
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
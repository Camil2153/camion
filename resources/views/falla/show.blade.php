@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Falla</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('fallas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $falla->cod_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Componente:</strong>
                            {{ $falla->com_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $falla->desc_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $falla->fec_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $falla->kil_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo de Inactividad:</strong>
                            {{ $falla->tie_ina_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Gravedad:</strong>
                            {{ $falla->gra_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Actual:</strong>
                            {{ $falla->est_act_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable de Detección:</strong>
                            {{ $falla->res_det_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable de Reparación:</strong>
                            {{ $falla->res_rep_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Acciones:</strong>
                            {{ $falla->acc_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $falla->cos_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $falla->cam_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Taller:</strong>
                            {{ $falla->tallere->nom_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $falla->empresa->nom_emp }}
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
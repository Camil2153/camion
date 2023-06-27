@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Ruta</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('rutas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $ruta->cod_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ruta->nom_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $ruta->origenCiudad->nom_ciu }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $ruta->destinoCiudad->nom_ciu }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $ruta->dis_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Duración:</strong>
                            {{ $ruta->dur_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Restricciones:</strong>
                            {{ $ruta->res_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Complejidad:</strong>
                            {{ $ruta->com_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ruta->est_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $ruta->empresa->nom_emp }}
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
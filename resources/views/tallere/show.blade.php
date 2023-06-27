@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Taller</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('talleres.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>NIT:</strong>
                            {{ $tallere->nit_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tallere->nom_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $tallere->dir_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios:</strong>
                            {{ $tallere->ser_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $tallere->hor_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Contacto:</strong>
                            {{ $tallere->num_con_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $tallere->ruta->nom_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $tallere->empresa->nom_emp }}
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

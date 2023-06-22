@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Conductor</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('conductores.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $conductore->ced_con }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conductore->nom_con }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $conductore->dir_con }}
                        </div>
                        <div class="form-group">
                            <strong>No. Teléfono:</strong>
                            {{ $conductore->num_tel_con }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $conductore->cor_ele_con }}
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

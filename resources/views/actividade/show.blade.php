@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>>Ver Actividad</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('actividades.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $actividade->cod_act }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $actividade->nom_act }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema:</strong>
                            {{ $actividade->sistema->nom_sis }}
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

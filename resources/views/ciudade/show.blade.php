@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Ciudad</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('ciudades.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $ciudade->cod_ciu }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ciudade->nom_ciu }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $ciudade->dep_ciu }}
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
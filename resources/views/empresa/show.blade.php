@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Empresa</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('empresas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>NIT:</strong>
                            {{ $empresa->nit_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->nom_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $empresa->pai_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Region:</strong>
                            {{ $empresa->reg_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Código postal:</strong>
                            {{ $empresa->cod_pos_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $empresa->dir_emp }}
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

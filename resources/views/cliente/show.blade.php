@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Cliente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $cliente->cod_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nom_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Comercial:</strong>
                            {{ $cliente->nom_com_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $cliente->col_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $cliente->dir_cli }}
                        </div>
                        <div class="form-group">
                            <strong>RFC:</strong>
                            {{ $cliente->rfc_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $cliente->ciudade->nom_ciu }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $cliente->empresa->nom_emp }}
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

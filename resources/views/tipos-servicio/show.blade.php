@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Tipo de Servicio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('tipos-servicios.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $tiposServicio->cod_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tiposServicio->nom_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $tiposServicio->desc_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo de Tiempo:</strong>
                            {{ $tiposServicio->int_tie_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo de Kilometraje:</strong>
                            {{ $tiposServicio->int_kil_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $tiposServicio->empresa->nom_emp }}
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

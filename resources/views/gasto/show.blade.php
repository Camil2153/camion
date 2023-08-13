@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Gasto</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('gastos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $gasto->cod_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $gasto->mon_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $gasto->fec_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $gasto->categoriasGasto->nom_cat_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Viaje:</strong>
                            {{ $gasto->via_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $gasto->est_gas }}
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

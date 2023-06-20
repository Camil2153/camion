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
                            <strong>Fec Gas:</strong>
                            {{ $gasto->fec_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Mon Gas:</strong>
                            {{ $gasto->mon_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Des Gas:</strong>
                            {{ $gasto->des_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Categoriagastos Id:</strong>
                            {{ $gasto->categoriagasto->nom_cat_gas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

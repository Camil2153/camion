@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver conductor</h1>
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
                            <strong>DNI:</strong>
                            {{ $conductore->dni_con }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conductore->nom_con }}
                        </div>
                        <div class="form-group">
                            <strong>Número de licencia:</strong>
                            {{ $conductore->num_lic_con }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de vencimiento licencia:</strong>
                            {{ $conductore->fec_ven_lic_con }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Contratación:</strong>
                            {{ $conductore->fec_con_con }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            <span class="estado-conductor {{ str_replace(' ', '-', $conductore->est_con) }}">
                                <div class="estado-conductor-box">
                                    {{ $conductore->est_con }}
                                </div>
                            </span>
                        </div>
                        <div class="form-group">
                            <strong>Fecha de nacimiento:</strong>
                            {{ $conductore->fec_nac_con }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $conductore->dir_con }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $conductore->num_tel_con }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $conductore->cor_ele_con }}
                        </div>
                        <div class="form-group">
                            <strong>Años de Experiencia:</strong>
                            {{ $conductore->año_exp_con }}
                        </div>
                        <div class="form-group">
                            <strong>EPS:</strong>
                            {{ $conductore->eps_con }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .estado-conductor.activo {
            background-color: green;
            color: white;
        }
        .estado-conductor.asignado {
            background-color: yellow;
            color: black;
        }
        .estado-conductor.bloqueado {
            background-color: red;
            color: white;
        }
        .estado-conductor-box {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

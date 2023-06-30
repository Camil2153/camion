@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Viaje</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $viaje->cod_via }}
                        </div>
                        <div class="form-group">
                            <strong>Carga:</strong>
                            {{ $viaje->car_via }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $viaje->pes_via }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $viaje->est_via }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Salida:</strong>
                            {{ $viaje->fec_sal_via }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de Salida:</strong>
                            {{ $viaje->hor_sal_via }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Llegada:</strong>
                            {{ $viaje->fec_lle_via }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de LLegada:</strong>
                            {{ $viaje->hor_lle_via }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $viaje->kil_via }}
                        </div>
                        <div class="form-group">
                            <strong>Combustible:</strong>
                            {{ $viaje->com_via }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $viaje->cam_via }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Via:</strong>
                            {{ $viaje->cliente->nom_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Rut Via:</strong>
                            {{ $viaje->ruta->nom_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Via:</strong>
                            {{ $viaje->empresa->nom_emp }}
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

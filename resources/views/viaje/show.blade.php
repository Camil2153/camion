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
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Via:</strong>
                            {{ $viaje->cod_via }}
                        </div>
                        <div class="form-group">
                            <strong>Car Via:</strong>
                            {{ $viaje->car_via }}
                        </div>
                        <div class="form-group">
                            <strong>Pes Via:</strong>
                            {{ $viaje->pes_via }}
                        </div>
                        <div class="form-group">
                            <strong>Est Via:</strong>
                            {{ $viaje->est_via }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Sal Via:</strong>
                            {{ $viaje->fec_sal_via }}
                        </div>
                        <div class="form-group">
                            <strong>Hor Sal Via:</strong>
                            {{ $viaje->hor_sal_via }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Lle Via:</strong>
                            {{ $viaje->fec_lle_via }}
                        </div>
                        <div class="form-group">
                            <strong>Hor Lle Via:</strong>
                            {{ $viaje->hor_lle_via }}
                        </div>
                        <div class="form-group">
                            <strong>Kil Via:</strong>
                            {{ $viaje->kil_via }}
                        </div>
                        <div class="form-group">
                            <strong>Com Via:</strong>
                            {{ $viaje->com_via }}
                        </div>
                        <div class="form-group">
                            <strong>Cam Via:</strong>
                            {{ $viaje->cam_via }}
                        </div>
                        <div class="form-group">
                            <strong>Cli Via:</strong>
                            {{ $viaje->cli_via }}
                        </div>
                        <div class="form-group">
                            <strong>Rut Via:</strong>
                            {{ $viaje->rut_via }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Via:</strong>
                            {{ $viaje->emp_via }}
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
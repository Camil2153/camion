@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Servicio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Ser:</strong>
                            {{ $servicio->cod_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Tip Ser Ser:</strong>
                            {{ $servicio->tip_ser_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Cam Ser:</strong>
                            {{ $servicio->cam_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Des Tip Ser:</strong>
                            {{ $servicio->des_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Ser:</strong>
                            {{ $servicio->fec_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Kil Ser:</strong>
                            {{ $servicio->kil_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Cos Ser:</strong>
                            {{ $servicio->cos_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Res Ser:</strong>
                            {{ $servicio->res_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Tal Ser:</strong>
                            {{ $servicio->tal_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Ser:</strong>
                            {{ $servicio->emp_ser }}
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

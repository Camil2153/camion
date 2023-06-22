@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Tipo de Servicio </h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('tiposervicios.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tiposervicio->nom_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Descriçión:</strong>
                            {{ $tiposervicio->des_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo de Tiempo:</strong>
                            {{ $tiposervicio->int_tie_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Intervalo de Kilometraje:</strong>
                            {{ $tiposervicio->int_kil_tip_ser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

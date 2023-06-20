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
                            <strong>Nom Tip Ser:</strong>
                            {{ $tiposervicio->nom_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Des Tip Ser:</strong>
                            {{ $tiposervicio->des_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Int Tie Tip Ser:</strong>
                            {{ $tiposervicio->int_tie_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Int Kil Tip Ser:</strong>
                            {{ $tiposervicio->int_kil_tip_ser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

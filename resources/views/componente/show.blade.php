@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Componente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                        <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('componentes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Ser Com:</strong>
                            {{ $componente->num_ser_com }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Com:</strong>
                            {{ $componente->nom_com }}
                        </div>
                        <div class="form-group">
                            <strong>Mar Com:</strong>
                            {{ $componente->mar_com }}
                        </div>
                        <div class="form-group">
                            <strong>Des Com:</strong>
                            {{ $componente->des_com }}
                        </div>
                        <div class="form-group">
                            <strong>Sis Com:</strong>
                            {{ $componente->sis_com }}
                        </div>
                        <div class="form-group">
                            <strong>Cos Com:</strong>
                            {{ $componente->cos_com }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
                            <strong>Número de Serie:</strong>
                            {{ $componente->num_ser_com }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $componente->nom_com }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $componente->mar_com }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $componente->des_com }}
                        </div>
                        <div class="form-group">
                            <strong>Sistema:</strong>
                            {{ $componente->sis_com }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $componente->cos_com }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

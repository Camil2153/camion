@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Cliente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom Cli:</strong>
                            {{ $cliente->nom_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Com Cli:</strong>
                            {{ $cliente->nom_com_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Dir Cli:</strong>
                            {{ $cliente->dir_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Col Cli:</strong>
                            {{ $cliente->col_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc Cli:</strong>
                            {{ $cliente->rfc_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Ciu Cli:</strong>
                            {{ $cliente->ciu_cli }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

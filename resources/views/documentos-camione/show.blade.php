@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Documento de Conductor</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('documentos-camiones.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $documentosCamione->cod_doc_cam }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $documentosCamione->nom_doc_cam }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $documentosCamione->est_doc_cam }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia de Documento:</strong>
                            {{ $documentosCamione->vig_doc_cam }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $documentosCamione->cam_doc_cam }}
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

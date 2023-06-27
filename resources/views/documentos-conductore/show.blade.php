@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Documentos de Conductor</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('documentos-conductores.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número de Licencia:</strong>
                            {{ $documentosConductore->num_lic_doc_con }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Vencimiento de Licencia:</strong>
                            {{ $documentosConductore->fec_ven_lic_doc_con }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria de Licencia:</strong>
                            {{ $documentosConductore->cat_lic_doc_con }}
                        </div>
                        <div class="form-group">
                            <strong>EPS:</strong>
                            {{ $documentosConductore->eps_doc_con }}
                        </div>
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $documentosConductore->conductore->nom_con }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $documentosConductore->empresa->nom_emp }}
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

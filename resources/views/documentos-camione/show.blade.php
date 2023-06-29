@extends('layouts.app')

@section('template_title')
    {{ $documentosCamione->name ?? "{{ __('Show') Documentos Camione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Documentos Camione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('documentos-camiones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Doc:</strong>
                            {{ $documentosCamione->cod_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Doc:</strong>
                            {{ $documentosCamione->nom_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Est Doc:</strong>
                            {{ $documentosCamione->est_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Vig Doc:</strong>
                            {{ $documentosCamione->vig_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Cam Doc Cam:</strong>
                            {{ $documentosCamione->cam_doc_cam }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

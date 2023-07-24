@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>>Ver Almacen</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('almacenes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $almacene->cod_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Componente:</strong>
                            {{ $almacene->componente->nom_com }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $almacene->cat_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $almacene->can_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación:</strong>
                            {{ $almacene->ubi_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $almacene->pro_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de adquisición:</strong>
                            {{ $almacene->fec_adq_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de vencimiento:</strong>
                            {{ $almacene->fec_ven_alm }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $almacene->est_alm }}
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
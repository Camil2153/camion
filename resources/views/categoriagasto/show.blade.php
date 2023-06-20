@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Categoria de Gasto</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('categoriagastos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom Cat Gas:</strong>
                            {{ $categoriagasto->nom_cat_gas }}
                        </div>
                        <div class="form-group">
                            <strong>Des Cat Gas:</strong>
                            {{ $categoriagasto->des_cat_gas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

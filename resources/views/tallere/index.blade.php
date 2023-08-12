@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de talleres</h1>

    <div class="float-right">
        <a href="{{ route('talleres.create') }}" class="btn btn-block btn-outline-secondary btn-sm float-right"  data-placement="left">
            {{ __('Nuevo') }}
        </a>
    </div>
    <div class="row">
        <div class="col-md-7,1">
            @if (session('success'))
                {!! session('success') !!}
            @endif

            @if (session('error'))
                {!! session('error') !!}
            @endif
        </div>
    </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>

                <th>NIT</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Servicios</th>
                <th>Horario</th>
                <th>Número de Contacto</th>
                <th>Ruta</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($talleres as $tallere)
                <tr>
            
                    <td>{{ $tallere->nit_tal }}</td>
                    <td>{{ $tallere->nom_tal }}</td>
                    <td>{{ $tallere->dir_tal }}</td>
                    <td>{{ $tallere->ser_tal }}</td>
                    <td>{{ $tallere->hor_tal }}</td>
                    <td>{{ $tallere->num_con_tal }}</td>
                    <td>{{ $tallere->ruta->nom_rut }}</td>

                    <td>
                        <form action="{{ route('talleres.destroy',$tallere->nit_tal) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('talleres.show',$tallere->nit_tal) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('talleres.edit',$tallere->nit_tal) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secundary btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">

    <style>
    #example_wrapper .paginate_button.page-item.active > a.page-link {
    background-color: lightgray !important;
    color: black !important;
    border-color: gray !important;
    }
    </style>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" // Carga el archivo de idioma en español
                }
            });
        });
    </script>
@stop

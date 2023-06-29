@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de documentos de camiones</h1>

    <div class="float-right">
                                <a href="{{ route('documentos-camiones.create') }}" class="btn btn-secundary border border-secondary btn-sm float-right"  data-placement="left">
                                {{ __('Nuevo') }}
                                </a>
                            </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Estado</th>
										<th>Vigencia</th>
										<th>Camion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentosCamiones as $documentosCamione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $documentosCamione->cod_doc }}</td>
											<td>{{ $documentosCamione->nom_doc }}</td>
											<td>{{ $documentosCamione->est_doc }}</td>
											<td>{{ $documentosCamione->vig_doc }}</td>
											<td>{{ $documentosCamione->cam_doc_cam }}</td>

                                            <td>
                                                <form action="{{ route('documentos-camiones.destroy',$documentosCamione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('documentos-camiones.show',$documentosCamione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('documentos-camiones.edit',$documentosCamione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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

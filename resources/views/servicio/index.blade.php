@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de servicios</h1>

    <div class="float-right">
                                <a href="{{ route('servicios.create') }}" class="btn btn-secundary border border-secondary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>

                <th>Código</th>
                <th>Tipo de Servicio</th>
                <th>Camion</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Kilometraje</th>
                <th>Costo</th>
                <th>Responsable</th>
                <th>Taller</th>
                <th>Empresa</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>

                    <td>{{ $servicio->cod_ser }}</td>
                    <td>{{ $servicio->tiposServicio->nom_tip_ser }}</td>
                    <td>{{ $servicio->cam_ser }}</td>
                    <td>{{ $servicio->desc_ser }}</td>
                    <td>{{ $servicio->fec_ser }}</td>
                    <td>{{ $servicio->kil_ser }}</td>
                    <td>{{ $servicio->cos_ser }}</td>
                    <td>{{ $servicio->res_ser }}</td>
                    <td>{{ $servicio->tallere->nom_tal }}</td>
                    <td>{{ $servicio->empresa->nom_emp }}</td>

                    <td>
                        <form action="{{ route('servicios.destroy',$servicio->cod_ser) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('servicios.show',$servicio->cod_ser) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('servicios.edit',$servicio->cod_ser) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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
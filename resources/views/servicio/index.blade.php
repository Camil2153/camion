@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Servicios</h1>

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
										<th>Codigo</th>
										<th>Tipo de Servicio</th>
										<th>Camion</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Kilometraje</th>
										<th>Costo</th>
										<th>Responsable</th>
										<th>Taller</th>
										<th>Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $servicio->cod_ser }}</td>
											<td>{{ $servicio->tip_ser_ser }}</td>
											<td>{{ $servicio->cam_ser }}</td>
											<td>{{ $servicio->des_tip_ser }}</td>
											<td>{{ $servicio->fec_ser }}</td>
											<td>{{ $servicio->kil_ser }}</td>
											<td>{{ $servicio->cos_ser }}</td>
											<td>{{ $servicio->res_ser }}</td>
											<td>{{ $servicio->tal_ser }}</td>
											<td>{{ $servicio->emp_ser }}</td>

                                            <td>
                                                <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('servicios.show',$servicio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicios.edit',$servicio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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

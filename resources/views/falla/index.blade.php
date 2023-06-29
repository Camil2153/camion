@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Fallas</h1>

    <div class="float-right">
                                <a href="{{ route('fallas.create') }}" class="btn btn-secundary border border-secondary btn-sm float-right"  data-placement="left">
                                {{ __('Nuevo') }}
                                </a>
                            </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>
      
										<th>Codigo</th>
										<th>Componente</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Kilometraje</th>
										<th>Tiempo inactividad (hrs)</th>
										<th>Gravedad</th>
										<th>Estado actual</th>
										<th>Responsable deteccion</th>
										<th>Responsable reparacion</th>
										<th>Acciones</th>
										<th>Costo</th>
										<th>Camion</th>
										<th>Taller</th>
										<th>Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fallas as $falla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $falla->cod_fal }}</td>
											<td>{{ $falla->com_fal }}</td>
											<td>{{ $falla->des_fal }}</td>
											<td>{{ $falla->fec_fal }}</td>
											<td>{{ $falla->kil_fal }}</td>
											<td>{{ $falla->tie_ina_fal }}</td>
											<td>{{ $falla->gra_fal }}</td>
											<td>{{ $falla->est_act_fal }}</td>
											<td>{{ $falla->res_det_fal }}</td>
											<td>{{ $falla->res_rep_fal }}</td>
											<td>{{ $falla->acc_fal }}</td>
											<td>{{ $falla->cos_fal }}</td>
											<td>{{ $falla->cam_fal }}</td>
											<td>{{ $falla->tal_fal }}</td>
											<td>{{ $falla->emp_fal }}</td>

                                            <td>
                                                <form action="{{ route('fallas.destroy',$falla->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fallas.show',$falla->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fallas.edit',$falla->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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


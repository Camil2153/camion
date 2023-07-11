@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de fallas</h1>

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
<<<<<<< HEAD

                <th>Código</th>
                <th>Componente</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Kilometraje</th>
                <th>Tiempo de Inactividad</th>
                <th>Gravedad</th>
                <th>Estado Actual</th>
                <th>Responsable de Detección</th>
                <th>Responsable de Reparación</th>
                <th>Acciones</th>
                <th>Costo</th>
                <th>Camion</th>
                <th>Taller</th>
                <th>Empresa</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($fallas as $falla)
                <tr>

                    <td>{{ $falla->cod_fal }}</td>
                    <td>{{ $falla->com_fal }}</td>
                    <td>{{ $falla->desc_fal }}</td>
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
                    <td>{{ $falla->tallere->nom_tal }}</td>
                    <td>{{ $falla->empresa->nom_emp }}</td>

=======
                <th>No</th>
                
                <th>Código</th>
                <th>Componente</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Kilometraje</th>
                <th>Tiempo de Inactividad</th>
                <th>Gravedad</th>
                <th>Estado Actual</th>
                <th>Responsable de Detección</th>
                <th>Responsable de Reparación</th>
                <th>Acciones</th>
                <th>Costo</th>
                <th>Camion</th>
                <th>Taller</th>
                <th>Empresa</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($fallas as $falla)
                <tr>
                    <td>{{ ++$i }}</td>
                    
                    <td>{{ $falla->cod_fal }}</td>
                    <td>{{ $falla->com_fal }}</td>
                    <td>{{ $falla->desc_fal }}</td>
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
                    <td>{{ $falla->tallere->nom_tal }}</td>
                    <td>{{ $falla->empresa->nom_emp }}</td>

>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                    <td>
                        <form action="{{ route('fallas.destroy',$falla->cod_fal) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('fallas.show',$falla->cod_fal) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('fallas.edit',$falla->cod_fal) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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
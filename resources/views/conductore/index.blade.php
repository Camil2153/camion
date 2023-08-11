@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de conductores</h1>

    <div class="float-right">
                                <a href="{{ route('conductores.create') }}" class="btn btn-block btn-outline-secondary btn-sm float-right"  data-placement="left">
                                {{ __('Nuevo') }}
                                </a>
                            </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>
  
                <th>DNI</th>
                <th>Nombre</th>
                <th>Número de licencia</th>
                <th>Fecha de vencimiento licencia</th>
                <th>Fecha de Contratación</th>
                <th>Estado</th>
                <th>Fecha de nacimiento</th>
                <th>Dirección</th>
                <th>Número de teléfono</th>
                <th>Correo electrónico</th>
                <th>Años de Experiencia</th>
                <th>EPS</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($conductores as $conductore)
                <tr>
              
                    <td>{{ $conductore->dni_con }}</td>
                    <td>{{ $conductore->nom_con }}</td>
                    <td>{{ $conductore->num_lic_con }}</td>
                    <td>{{ $conductore->fec_ven_lic_con }}</td>
                    <td>{{ $conductore->fec_con_con }}</td>
                    <td>
                    @if ($conductore->est_con == 'activo')
                        <span class="badge badge-success">{{ $conductore->est_con }}</span>
                    @elseif ($conductore->est_con == 'asignado')
                        <span class="badge badge-warning">{{ $conductore->est_con }}</span>
                        @elseif ($conductore->est_con == 'bloqueado')
                        <span class="badge badge-danger">{{ $conductore->est_con }}</span>
                    @else
                        {{ $conductore->est_con }}
                    @endif
                    </td>
                    <td>{{ $conductore->fec_nac_con }}</td>
                    <td>{{ $conductore->dir_con }}</td>
                    <td>{{ $conductore->num_tel_con }}</td>
                    <td>{{ $conductore->cor_ele_con }}</td>
                    <td>{{ $conductore->año_exp_con }}</td>
                    <td>{{ $conductore->eps_con }}</td>

                    <td>
                        <form action="{{ route('conductores.destroy',$conductore->dni_con) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('conductores.show',$conductore->dni_con) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('conductores.edit',$conductore->dni_con) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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

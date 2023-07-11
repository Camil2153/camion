@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de viajes</h1>

    <div class="float-right">
                                <a href="{{ route('viajes.create') }}" class="btn btn-secundary border border-secondary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
@stop

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead">
            <tr>

                <th>Código</th>
                <th>Carga</th>
                <th>Peso</th>
                <th>Estado</th>
                <th>Fecha de Salida</th>
                <th>Hora de Salida</th>
                <th>Fecha de Llegada</th>
                <th>Hora de Llegada</th>
                <th>Kilometraje</th>
                <th>Combustible</th>
                <th>Camion</th>
                <th>Cliente</th>
                <th>Ruta</th>
                <th>Empresa</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($viajes as $viaje)
                <tr>

                    <td>{{ $viaje->cod_via }}</td>
                    <td>{{ $viaje->car_via }}</td>
                    <td>{{ $viaje->pes_via }}</td>
                    <td>
            @if ($viaje->est_via == 'completado')
                <span class="badge badge-success">{{ $viaje->est_via }}</span>
            @elseif ($viaje->est_via == 'cancelado')
                <span class="badge badge-danger">{{ $viaje->est_via }}</span>
            @elseif ($viaje->est_via == 'en progreso')
                <span class="badge badge-warning">{{ $viaje->est_via }}</span>
            @elseif ($viaje->est_via == 'programado')
                <span class="badge badge-primary">{{ $viaje->est_via }}</span>
            @else
                {{ $viaje->est_via }}
            @endif
        </td>
                    <td>{{ $viaje->fec_sal_via }}</td>
                    <td>{{ $viaje->hor_sal_via }}</td>
                    <td>{{ $viaje->fec_lle_via }}</td>
                    <td>{{ $viaje->hor_lle_via }}</td>
                    <td>{{ $viaje->kil_via }}</td>
                    <td>{{ $viaje->com_via }}</td>
                    <td>{{ $viaje->cam_via }}</td>
                    <td>{{ $viaje->cliente->nom_cli }}</td>
                    <td>{{ $viaje->ruta->nom_rut }}</td>
                    <td>{{ $viaje->empresa->nom_emp }}</td>

                    <td>
                        <form action="{{ route('viajes.destroy',$viaje->cod_via) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('viajes.show',$viaje->cod_via) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('viajes.edit',$viaje->cod_via) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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
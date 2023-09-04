@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de camiones</h1>

    <div class="float-right">
        <a href="{{ route('camiones.create') }}" class="btn btn-block btn-outline-secondary btn-sm float-right"  data-placement="left">
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

                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Número de ejes</th>
                <th>Estado</th>
                <th>Kilometraje</th>
                <th>Capacidad</th>
                <th>Promedio de Combustible</th>
                <th>Conductor</th>

                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($camiones as $camione)
                <tr>

                    <td>{{ $camione->pla_cam }}</td>
                    <td>{{ $camione->mar_cam }}</td>
                    <td>{{ $camione->mod_cam }}</td>
                    <td>{{ $camione->tip_cam }}</td>
                    <td>{{ $camione->num_eje_cam }}</td>
                    <td>
                    @if ($camione->est_cam == 'disponible')
                        <span class="badge badge-success">{{ $camione->est_cam }}</span>
                    @elseif ($camione->est_cam == 'fuera de servicio')
                        <span class="badge badge-danger">{{ $camione->est_cam }}</span>
                    @elseif ($camione->est_cam == 'en mantenimiento')
                        <span class="badge badge-warning">{{ $camione->est_cam }}</span>
                    @elseif ($camione->est_cam == 'en viaje')
                        <span class="badge badge-info">{{ $camione->est_cam }}</span>
                    @elseif ($camione->est_cam == 'inactivo')
                        <span class="badge badge-secondary">{{ $camione->est_cam }}</span>
                    @else
                        {{ $camione->est_cam }}
                    @endif
                    </td>
                    <td>{{ number_format($camione->kil_cam, 0, '.', '.') }}</td>
                    <td>{{ $camione->cap_cam }}</td>
                    <td>{{ $camione->cont_cam }}</td>
                    <td>{{ $camione->conductore->nom_con }}</td>

                    <td>
                        <form action="{{ route('camiones.destroy',$camione->pla_cam) }}" method="POST">
                            <a class="btn btn-sm btn-secundary" href="{{ route('camiones.show',$camione->pla_cam) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                            <a class="btn btn-sm btn-secundary" href="{{ route('camiones.edit',$camione->pla_cam) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
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
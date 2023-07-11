@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Viaje</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('viajes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('viaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    // Obtener el elemento de peso del viaje
    var pesoViajeInput = $('#pes_via');

    // Obtener el elemento de selección de camiones
    var camionesSelect = $('#cam_via');

    // Obtener los camiones disponibles
    var camionesDisponibles = @json($camionesDisponibles);

    // Al cambiar el peso del viaje
    pesoViajeInput.on('input', function() {
        // Obtener el peso del viaje
        var pesoViaje = parseInt(pesoViajeInput.val());

        // Filtrar los camiones en función del peso del viaje y la capacidad
        var camionesFiltrados = camionesDisponibles.filter(function(camion) {
            return camion.cap_cam >= pesoViaje;
        });

        // Limpiar el select de camiones
        camionesSelect.empty();

        // Agregar las opciones de camiones filtrados al select
        camionesFiltrados.forEach(function(camion) {
            camionesSelect.append($('<option></option>').val(camion.pla_cam).text(camion.pla_cam));
        });

        // Seleccionar la primera opción si está disponible, de lo contrario, seleccionar la opción vacía
        if (camionesFiltrados.length > 0) {
            camionesSelect.val(camionesFiltrados[0].pla_cam);
        } else {
            camionesSelect.val('');
        }
    });

    // Disparar el evento 'input' para filtrar los camiones al cargar la página
    pesoViajeInput.trigger('input');
    </script>
@stop

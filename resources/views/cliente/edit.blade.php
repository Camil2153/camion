@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('clientes.update', $cliente->cod_cli) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cliente.form')

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
    <script> console.log('Hi!'); </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script>
    $(function() {
    // URL de la API de Geonames para buscar ciudades por nombre (versión segura https)
    var apiUrl = "https://secure.geonames.org/searchJSON";

    // Tu nombre de usuario de Geonames (reemplaza "TU_NOMBRE_DE_USUARIO" con tu nombre de usuario real)
    var username = "katherinbeltran";

    // Configurar el autocompletado en el campo de texto
    $('#ciu_cli').autocomplete({
        minLength: 2, // Número mínimo de caracteres para comenzar a buscar
        source: function(request, response) {
        $.ajax({
            url: apiUrl,
            dataType: "json",
            data: {
            q: request.term,
            maxRows: 10, // Número máximo de sugerencias a mostrar
            username: username // Tu nombre de usuario de Geonames
            },
            success: function(data) {
            // Procesar los resultados de la API y obtener los nombres de las ciudades
            var cities = data.geonames.map(function(city) {
                return city.name;
            });
            response(cities);
            }
        });
        }
    });
    });
    </script>
@stop


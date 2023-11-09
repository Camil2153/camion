@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Ruta</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('rutas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $ruta->cod_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ruta->nom_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $ruta->ori_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $ruta->des_rut }}
                        </div>
                        <div id="map" style="height: 200px; width: 100%;"></div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $ruta->dis_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Duración:</strong>
                            {{ $ruta->dur_rut }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ruta->est_rut }}
                        </div>

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
    <script>
        var map;
        var geocoder;
        var debounceTimer;
        var directionsService;
        var directionsRenderer;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 4.5709, lng: -74.2973 },
                zoom: 6
            });
            geocoder = new google.maps.Geocoder();
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({ map: map });

            updateMap();
        }

        function updateMap() {
            var originValue = '{{ $ruta->ori_rut }}';
            var destinationValue = '{{ $ruta->des_rut}}';

            geocoder.geocode({ address: originValue }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    var originLocation = results[0].geometry.location;
                    geocoder.geocode({ address: destinationValue }, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            var destinationLocation = results[0].geometry.location;

                            var request = {
                                origin: originLocation,
                                destination: destinationLocation,
                                travelMode: google.maps.TravelMode.DRIVING
                            };

                            directionsService.route(request, function (response, status) {
                                if (status === google.maps.DirectionsStatus.OK) {
                                    directionsRenderer.setDirections(response);
                                    var bounds = new google.maps.LatLngBounds();
                                    bounds.extend(originLocation);
                                    bounds.extend(destinationLocation);
                                    map.fitBounds(bounds);
                                } else {
                                    window.alert('No se pudo calcular la ruta: ' + status);
                                    directionsRenderer.setDirections({ routes: [] });
                                }
                            });
                        } else {
                            window.alert('No se pudo encontrar el destino');
                            directionsRenderer.setDirections({ routes: [] });
                        }
                    });
                } else {
                    window.alert('No se pudo encontrar el origen');
                    directionsRenderer.setDirections({ routes: [] });
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaskD-bpTHUBwXW5rz9npon8ARGLijxuU&callback=initMap" async defer></script>
@stop
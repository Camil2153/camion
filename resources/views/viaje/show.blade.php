@extends('adminlte::page')

@section('title', 'Ver Viaje')

@section('content_header')
    <h1>Ver Viaje</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Orden de Trabajo para el vehiculo <strong>{{ $viaje->cam_via }}</strong> Orden número: <strong><span style="color: red;">{{ $viaje->cod_via }}</span></strong></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Fecha de Salida:</strong>
                                    {{ $viaje->fec_sal_via }}, {{ $viaje->hor_sal_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Llegada:</strong>
                                    {{ $viaje->fec_lle_via }}, {{ $viaje->hor_lle_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Cliente:</strong>
                                    {{ $viaje->cliente->nom_cli }}
                                </div>
                                <div class="form-group">
                                    <strong>Ruta:</strong>
                                    {{ $viaje->ruta->nom_rut }}
                                </div>
                                <div class="form-group">
                                    <strong>Empresa:</strong>
                                    {{ $viaje->empresa->nom_emp }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Estado:</strong>
                                    @php
                                        $estadoClass = '';
                                        switch($viaje->est_via) {
                                            case 'programado':
                                                $estadoClass = 'text-primary';
                                                break;
                                            case 'en progreso':
                                                $estadoClass = 'text-warning';
                                                break;
                                            case 'completado':
                                                $estadoClass = 'text-success';
                                                break;
                                            case 'cancelado':
                                                $estadoClass = 'text-danger';
                                                break;
                                        }
                                    @endphp
                                    <span class="{{ $estadoClass }}"><strong>{{ $viaje->est_via }}</strong></span>
                                </div>
                                <div class="form-group">
                                    <strong>Carga:</strong>
                                    {{ $viaje->car_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Peso:</strong>
                                    {{ $viaje->pes_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Kilometraje:</strong>
                                    {{ $viaje->kil_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Combustible:</strong>
                                    {{ $viaje->com_via }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <details>
                            <summary>Gastos</summary>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Fecha</th>
                                            <th>Categoría</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalMonto = 0;
                                        @endphp
                                        @if ($viaje && $viaje->gastos)
                                            @foreach ($viaje->gastos as $gasto)
                                                <tr>
                                                    <td>{{ $gasto->cod_gas }}</td>
                                                    <td>{{ $gasto->fec_gas }}</td>
                                                    <td>{{ $gasto->categoriasGasto->nom_cat_gas }}</td>
                                                    <td>{{ $gasto->mon_gas }}</td>
                                                </tr>
                                                @php
                                                    $totalMonto += $gasto->mon_gas;
                                                @endphp
                                            @endforeach
                                            <tr>
                                                <td colspan="3"><strong>Total</strong></td>
                                                <td>{{ number_format($totalMonto, 2, '.', ',') }}</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <details>
                            <summary>Información del Camión</summary>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Placa del Camión:</strong>
                                            {{ $viaje->camione->pla_cam }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Marca:</strong>
                                            {{ $viaje->camione->mar_cam }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Modelo:</strong>
                                            {{ $viaje->camione->mod_cam }}
                                        </div>
                                        <div class="form-group">
                                            <strong>Tipo:</strong>
                                            {{ $viaje->camione->tip_cam }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Agrega aquí los demás campos del camión que deseas mostrar -->
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <details>
                    <summary>Predecir fallas</summary>
                    <div class="card-body">
                        <div class="row">
                            <div class="container">
                            @if (isset($posiblesAlertas) && count($posiblesAlertas) > 0)
                                <p>Alertas:</p>
                                <ul>
                                    @foreach ($posiblesAlertas as $alerta)
                                        <li>{{ $alerta }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if(isset($posiblesFallas) && count($posiblesFallas) > 0)
                                <p>Posibles fallas:</p>
                                <ul>
                                    @foreach($posiblesFallas as $key => $falla)
                                        <li>{{ $falla }} - {{ $posiblesSistemas[$key] }}</li>
                                    @endforeach
                                </ul>
                            @elseif(isset($mensaje))
                                <p>{{ $mensaje }}</p>
                            @else
                                <p>No se encontraron posibles fallas.</p>
                            @endif
                            </div>
                        </div>
                        <!-- Agrega aquí los demás campos del camión que deseas mostrar -->
                    </div>
                </details>
            </div>
        </div>
    </div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <details>
                            <summary>Mapa de Ruta</summary>
                            <div class="card-body">
                                <div id="map" style="height: 400px; width: 100%;"></div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
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
            var originValue = '{{ $viaje->ruta->origenCiudad->nom_ciu }}';
            var destinationValue = '{{ $viaje->ruta->destinoCiudad->nom_ciu}}';

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHEvQIsLhByKH2e_H2ZEtVrbYnLGcIU&callback=initMap" async defer></script>
@stop

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
                            <div class="col-md-4">
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
                            <div class="col-md-4">
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
                                    <strong>Distancia:</strong>
                                    {{ $viaje->ruta->dis_rut }}
                                </div>
                                <div class="form-group">
                                    <strong>Combustible:</strong>
                                    {{ $viaje->com_via }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="map-container">
                                    <div id="map" style="height: 200px; width: 100%;"></div>
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
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#gastos">Gastos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#informacionCamion">Información del Camión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#alertas">Alertas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="gastos" class="tab-pane fade">
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
                        </div>
                        <div id="informacionCamion" class="tab-pane fade">
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

                            </div>
                        </div>
                        <div id="alertas" class="tab-pane fade">
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        @if($alertas && count($alertas) > 0)
                                            @foreach($alertas as $alerta)
                                                <div class="alert alert-{{ $alerta['color'] }}" role="alert">
                                                    {{ $alerta['mensaje'] }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
         </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
    .alert-red {
        background-color: #FF0000;
        color: #000000;
    }

    .alert-orange {
        background-color: #FF6B1A;
        color: #000000;
    }

    .alert-yellow {
        background-color: #FFEE00;
        color: #000000;
    }

    .alert-green {
        background-color: #3ADB35;
        color: #000000;
    }
    </style>
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
            var originValue = '{{ $viaje->ruta->ori_rut }}';
            var destinationValue = '{{ $viaje->ruta->des_rut}}';

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stop
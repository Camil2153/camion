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
                                <a class="nav-link" data-bs-toggle="tab" href="#informacionCamion">Información del Camión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#gastos">Gastos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#prediccionFallas">Predicción de Fallas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
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

                                            <!-- Filas para la información adicional de los servicios asociados al camión en alerta -->
                                            @foreach ($serviciosEnAlerta as $infoServicio)
                                                <tr>
                                                    <td>{{ $infoServicio['codigo'] }}</td>
                                                    <td>{{ $infoServicio['fecha'] }}</td>
                                                    <td>{{ $infoServicio['categoria'] }}</td>
                                                    <td>{{ $infoServicio['monto'] }}</td>
                                                </tr>
                                                @php
                                                    $totalMonto += $infoServicio['monto'];
                                                @endphp
                                            @endforeach
                                            <!-- Fila para el total -->
                                            <tr>
                                                <td colspan="3"><strong>Total</strong></td>
                                                <td>{{ number_format($totalMonto, 2, '.', ',') }}</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="prediccionFallas" class="tab-pane fade">
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        @if($alertas && count($alertas) > 0)
                                            @foreach($alertas as $alerta)
                                                @php
                                                    $iconClass = '';
                                                    switch ($alerta['color']) {
                                                        case 'red':
                                                            $iconClass = 'fas fa-ban';
                                                            break;
                                                        case 'orange':
                                                            $iconClass = 'fas fa-info';
                                                            break;
                                                        case 'yellow':
                                                            $iconClass = 'fas fa-exclamation-triangle';
                                                            break;
                                                        case 'green':
                                                            $iconClass = 'fas fa-check';
                                                            break;
                                                        default:
                                                            $iconClass = 'fas fa-question'; // Ícono por defecto si el color no coincide
                                                            break;
                                                    }
                                                @endphp
                                                <div class="alert alert-{{ $alerta['color'] }} alert-dismissible fade show" role="alert">
                                                    <h5>
                                                        <i class="{{ $iconClass }}"></i> Alerta!
                                                    </h5>
                                                    {{ $alerta['mensaje'] }}
                                                </div>
                                            @endforeach
                                            @else
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                <h5>
                                                    <i class="fas fa-info-circle"></i> No hay predicciones de fallas.
                                                </h5>
                                                No se encontraron alertas activas para este viaje.
                                            </div>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    .alert-red {
        background-color: #dc3545;
        color: #FFFFFF;
    }

    .alert-orange {
        background-color: #fd7e14;
        color: #000000;
    }

    .alert-yellow {
        background-color: #ffc107;
        color: #000000;
    }

    .alert-green {
        background-color: #28a745;
        color: #FFFFFF;
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stop
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_rut', $ruta->cod_rut, ['class' => 'form-control' . ($errors->has('cod_rut') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>     
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_rut', $ruta->nom_rut, ['id' => 'nom_rut', 'class' => 'form-control' . ($errors->has('nom_rut') ? ' is-invalid' : ''), 'readonly' => 'readonly']) }}
            {!! $errors->first('nom_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Origen') }}
            {{ Form::text('ori_rut', $ruta->ori_rut, ['id' => 'ori_rut', 'class' => 'form-control' . ($errors->has('ori_rut') ? ' is-invalid' : ''), 'oninput' => 'updateName()', 'onchange' => 'updateMap()']) }}
            {!! $errors->first('ori_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Destino') }}
            {{ Form::text('des_rut', $ruta->des_rut, ['id' => 'des_rut', 'class' => 'form-control' . ($errors->has('des_rut') ? ' is-invalid' : ''), 'oninput' => 'updateName()', 'onchange' => 'updateMap()']) }}
            {!! $errors->first('des_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div id="map" style="height: 400px; width: 100%;"></div>
        <div class="form-group">
            {{ Form::label('Distancia (km)') }}
            <?php
                $dis_rut_formatted = number_format($ruta->dis_rut, 0, ',', '.');
            ?>
            {{ Form::text('dis_rut', $dis_rut_formatted, ['id' => 'dis_rut', 'class' => 'form-control', 'readonly' => 'readonly']) }}
            {!! $errors->first('dis_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Duración') }}
            {{ Form::text('dur_rut', $ruta->dur_rut, ['id' => 'dur_rut', 'class' => 'form-control', 'readonly' => 'readonly']) }}
            {!! $errors->first('dur_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('est_rut', $ruta->est_rut, ['class' => 'form-control' . ($errors->has('est_rut') ? ' is-invalid' : '')]) }}
            {!! $errors->first('est_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('rutas.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhGHEvQIsLhByKH2e_H2ZEtVrbYnLGcIU&callback=initMap" async defer></script>
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
    }

    function updateMap() {
        var origin = document.getElementById('ori_rut').value; // Get the value directly
        var destination = document.getElementById('des_rut').value; // Get the value directly

        if (!origin || !destination) { // Check if either input is empty
            map.setCenter({ lat: 4.5709, lng: -74.2973 });
            map.setZoom(6);
            directionsRenderer.setDirections({ routes: [] });
            document.getElementById('dis_rut').value = '';
            document.getElementById('dur_rut').value = '';
            return;
        }

        geocoder.geocode({ address: origin }, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                var originLocation = results[0].geometry.location;
                geocoder.geocode({ address: destination }, function (results, status) { // Change destinationValue to destination
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

                                var route = response.routes[0];
                                var distance = 0;
                                var duration = 0;

                                for (var i = 0; i < route.legs.length; i++) {
                                    distance += route.legs[i].distance.value;
                                    duration += route.legs[i].duration.value;
                                }

                                distance = distance / 1000; // Convertir de metros a kilómetros

                                var days = Math.floor(duration / (60 * 60 * 24));
                                var hours = Math.floor((duration % (60 * 60 * 24)) / (60 * 60));
                                var minutes = Math.floor((duration % (60 * 60)) / 60);

                                var durationText = "";
                                if (days > 0) {
                                    durationText += days + " día(s) ";
                                }
                                if (hours > 0) {
                                    durationText += hours + " hora(s) ";
                                }
                                if (minutes > 0) {
                                    durationText += minutes + " minuto(s)";
                                }

                                document.getElementById('dis_rut').value = distance.toFixed(2);
                                document.getElementById('dur_rut').value = durationText;
                            } else {
                                window.alert('No se pudo calcular la ruta: ' + status);
                                directionsRenderer.setDirections({ routes: [] });
                                document.getElementById('dis_rut').value = '';
                                document.getElementById('dur_rut').value = '';
                            }
                        });
                    } else {
                        window.alert('No se pudo encontrar el destino');
                        directionsRenderer.setDirections({ routes: [] });
                        document.getElementById('dis_rut').value = '';
                        document.getElementById('dur_rut').value = '';
                    }
                });
            } else {
                window.alert('No se pudo encontrar el origen');
                directionsRenderer.setDirections({ routes: [] });
                document.getElementById('dis_rut').value = '';
                document.getElementById('dur_rut').value = '';
            }
        });
    }
</script>

<script>
function updateName() {
    var origin = document.getElementById('ori_rut').value;
    var destination = document.getElementById('des_rut').value;

    var nameField = document.getElementById('nom_rut');
    nameField.value = origin + ' - ' + destination;
}
</script>
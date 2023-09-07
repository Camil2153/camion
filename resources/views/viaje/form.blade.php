<div class="box box-info padding-1">
    <div class="box-body form-grid">
        <div class="column">
            <div class="form-group">
                {{ Form::label('Código') }}
                {{ Form::text('cod_via', $viaje->cod_via, ['class' => 'form-control' . ($errors->has('cod_via') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
                {!! $errors->first('cod_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Peso (T)') }}
                {{ Form::number('pes_via', $viaje->pes_via, ['class' => 'form-control' . ($errors->has('pes_via') ? ' is-invalid' : ''), 'id' => 'pes_via', 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
                {!! $errors->first('pes_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                <label for="rut_via">Ruta</label>
                <select class="form-control" id="rut_via" name="rut_via" required>
                    <option value="">Seleccionar ruta</option>
                    @foreach ($rutas as $cod_rut => $nom_rut)
                        @php
                            $selected = ($viaje->ruta && $viaje->ruta->cod_rut == $cod_rut) ? 'selected' : '';
                        @endphp
                        <option value="{{ $cod_rut }}" data-duracion="{{ $rutasDuraciones[$cod_rut] }}" {{ $selected }}>{{ $nom_rut }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {{ Form::label('Fecha de salida') }}
                {{ Form::date('fec_sal_via', $viaje->fec_sal_via, ['class' => 'form-control' . ($errors->has('fec_sal_via') ? ' is-invalid' : ''), 'id' => 'fec_sal_via']) }}
                {!! $errors->first('fec_sal_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Hora de Salida') }}
                {{ Form::time('hor_sal_via', $viaje->hor_sal_via, ['class' => 'form-control' . ($errors->has('hor_sal_via') ? ' is-invalid' : ''), 'id' => 'hor_sal_via']) }}
                {!! $errors->first('hor_sal_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Fecha de Llegada') }}
                {{ Form::date('fec_lle_via', $viaje->fec_lle_via, ['class' => 'form-control' . ($errors->has('fec_lle_via') ? ' is-invalid' : ''), 'id' => 'fec_lle_via']) }}
                {!! $errors->first('fec_lle_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Hora de Llegada') }}
                {{ Form::time('hor_lle_via', $viaje->hor_lle_via, ['class' => 'form-control' . ($errors->has('hor_lle_via') ? ' is-invalid' : ''), 'id' => 'hor_lle_via']) }}
                {!! $errors->first('hor_lle_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
            <div class="column">
            <div class="form-group">
                {{ Form::label('Camion') }}
                {{ Form::select('cam_via', $camiones, $viaje->cam_via, ['class' => 'form-control' . ($errors->has('cam_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion', 'id' => 'cam_via']) }}
                {!! $errors->first('cam_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Tipo de Carga') }}
                {{ Form::text('car_via', $viaje->car_via, ['class' => 'form-control' . ($errors->has('car_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('car_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Estado') }}
                @if (Route::currentRouteName() === 'viajes.edit')
                    @if ($viaje->est_via === 'programado')
                        {{ Form::select('est_via', ['en progreso' => 'En progreso', 'cancelado' => 'Cancelado'], $viaje->est_via, ['class' => 'form-control' . ($errors->has('est_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
                    @elseif ($viaje->est_via === 'en progreso')   
                        {{ Form::select('est_via', ['completado' => 'Completado', 'cancelado' => 'Cancelado'], $viaje->est_via, ['class' => 'form-control' . ($errors->has('est_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
                    @else    
                        {{ Form::select('est_via', ['programado' => 'Programado', 'en progreso' => 'En progreso', 'completado' => 'Completado', 'cancelado' => 'Cancelado'], $viaje->est_via, ['class' => 'form-control' . ($errors->has('est_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado', 'disabled' => 'disabled']) }}    
                    @endif
                @else
                {{ Form::select('est_via', ['programado' => 'Programado', 'en progreso' => 'En progreso', 'completado' => 'Completado', 'cancelado' => 'Cancelado'], 'programado', ['class' => 'form-control' . ($errors->has('est_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado', 'disabled' => 'disabled']) }}
                @endif
                {!! $errors->first('est_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Combustible (Galones)') }}
                {{ Form::text('com_via', $viaje->com_via, ['class' => 'form-control' . ($errors->has('com_via') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
                {!! $errors->first('com_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Cliente') }}
                {{ Form::select('cli_via', $clientes, $viaje->cli_via, ['class' => 'form-control' . ($errors->has('cli_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar cliente']) }}
                {!! $errors->first('cli_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Empresa') }}
                {{ Form::select('emp_via', $empresas, $viaje->emp_via, ['class' => 'form-control' . ($errors->has('emp_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
                {!! $errors->first('emp_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group" style="display: none;">
                {{ Form::hidden('dur_rut', null, ['id' => 'dur_rut']) }}
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('viajes.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

<style>
    /* Agregamos estilos para la cuadrícula */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Dos columnas con el mismo ancho */
        gap: 10px; /* Espacio del 10% entre las columnas */
    }

    /* Estilos adicionales para los campos y etiquetas */
    .form-group {
        display: flex;
        flex-direction: column;
    }

    /* Estilos para el label */
    .form-group label {
        margin-bottom: 5px;
    }

    /* Estilo cuando el mouse no está encima */
    .custom-btn {
        font-weight: bold; /* Ajusta el grosor del texto */
    }

    /* Agregamos estilos para las columnas */
    .column {
        display: flex;
        flex-direction: column;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function parseDurationText(durationText) {
        var regex = /(\d+)\s+día\(s\)\s+(\d+)\s+hora\(s\)\s+(\d+)\s+minuto\(s\)/;
        var match = durationText.match(regex);

        if (match) {
            var days = parseInt(match[1]);
            var hours = parseInt(match[2]);
            var minutes = parseInt(match[3]);
            return days * 24 * 60 + hours * 60 + minutes; // Convertir a minutos
        }

        return 0;
    }

    function calculateArrivalDateTime() {
        var duracionRutaText = $('#rut_via option:selected').attr('data-duracion');
        var duracionRuta = parseDurationText(duracionRutaText);

        var fechaSalida = new Date($('#fec_sal_via').val() + 'T' + $('#hor_sal_via').val());
        var tiempoDuracion = duracionRuta;
        var fechaLlegada = new Date(fechaSalida.getTime() + tiempoDuracion * 60000); // Convertir minutos a milisegundos

        // Ajustar la hora de llegada para la zona horaria local
        var localFechaLlegada = new Date(fechaLlegada.getTime() - fechaLlegada.getTimezoneOffset() * 60000);
        var formattedFechaLlegada = localFechaLlegada.toISOString().slice(0, 16);

        $('#fec_lle_via').val(formattedFechaLlegada.slice(0, 10));
        $('#hor_lle_via').val(formattedFechaLlegada.slice(11, 16));
    }

    // Llama a la función de cálculo al seleccionar una opción de ruta
    $('#rut_via').on('change', function() {
        calculateArrivalDateTime();
    });

    // Llama a la función de cálculo al cambiar la fecha de salida
    $('#fec_sal_via, #hor_sal_via').on('change', function() {
        calculateArrivalDateTime();
    });
</script>
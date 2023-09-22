<div class="box box-info padding-1">
    <div class="box-body form-grid">
    
    <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'pattern' => '[0-9]{7}', 'maxlength' => '7', 'placeholder' => 'XXXXXXX', 'id' => 'cod_ser']) }}
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : ''), 'placeholder' => 'Fec Ser']) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('sis_ser', $sistemas, $servicio->sis_ser, ['class' => 'form-control' . ($errors->has('sis_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema', 'id' => 'sis_ser']) }}
            {!! $errors->first('sis_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            @if (Route::currentRouteName() === 'servicios.create')
                {{ Form::select('est_ser', ['No comenzada' => 'No comenzada', 'En curso' => 'En curso'], $servicio->est_ser, [
                    'class' => 'form-control' . ($errors->has('est_ser') ? ' is-invalid' : ''),
                    'placeholder' => 'Seleccionar estado']) }}
            @else
                {{ Form::select('est_ser', ['No comenzada' => 'No comenzada', 'En curso' => 'En curso', 'Aplazada' => 'Aplazada', 'Cancelada' => 'Cancelada', 'Completada' => 'Completada'], $servicio->est_ser, [
                    'class' => 'form-control' . ($errors->has('est_ser') ? ' is-invalid' : ''),
                    'placeholder' => 'Seleccionar estado',
                ]) }}
            @endif
            {!! $errors->first('est_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::select('act_ser', $actividades, $servicio->act_ser, ['class' => 'form-control' . ($errors->has('act_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar actividad', 'id' => 'act_ser']) }}
            {!! $errors->first('act_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de servicio') }}
            <div class="radio-container">
                <label class="radio-custom">
                    {{ Form::radio('tip_ser', 'preventivo', $servicio->tip_ser === 'preventivo', ['required', 'id' => 'tipo-preventivo']) }}
                    Preventivo
                </label>

                <label class="radio-custom">
                    {{ Form::radio('tip_ser', 'correctivo', $servicio->tip_ser === 'correctivo', ['required', 'id' => 'tipo-correctivo']) }}
                    Correctivo
                </label>
            </div>
        </div>
    </div>
        <div class="form-group">
            {{ Form::label('Detalles') }}
            {{ Form::text('det_ser', $servicio->det_ser, ['class' => 'form-control' . ($errors->has('det_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('det_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-body form-grid">
    <div class="form-group">
        {{ Form::label('Camion') }}
        @if ($camion)
            {{ Form::text('cam_ser', $camion->pla_cam, ['class' => 'form-control', 'readonly' => true]) }}
        @else
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
        @endif
        {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
    </div>
        <div class="form-group" id="falla-field">
            {{ Form::label('Falla') }}
            @if (Route::currentRouteName() === 'servicios.edit') <!-- Verificar si es una ruta de edición -->
            {{-- Verificar si $servicio->falla no es nulo antes de acceder a desc_fal --}}
            {{ Form::select('fal_ser', [$servicio->fal_ser => $servicio->falla?->desc_fal], $servicio->fal_ser, ['class' => 'form-control' . ($errors->has('fal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar falla', 'disabled' => 'disabled']) }}
            @else <!-- Modo creación -->
            {{ Form::select('fal_ser', $fallasFiltrados, $servicio->fal_ser ?? null, ['class' => 'form-control' . ($errors->has('fal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar falla']) }}
            @endif
            {!! $errors->first('fal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de intervalo') }}
            <div class="radio-container">
                <label class="radio-custom">
                    {{ Form::radio('tip_int_ser', 'dias', $servicio->tip_int_ser === 'dias', ['required', 'id' => 'tipo-dias']) }}
                    Días
                </label>

                <label class="radio-custom">
                    {{ Form::radio('tip_int_ser', 'kilometros', $servicio->tip_int_ser === 'kilometros', ['required', 'id' => 'tipo-kilometros']) }}
                    Kilómetros
                </label>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo') }}
            {{ Form::text('int_ser', $servicio->int_ser, ['id' => 'int_ser', 'class' => 'form-control' . ($errors->has('int_ser') ? ' is-invalid' : ''), 'placeholder' => 'días/kilómetros']) }}
            {!! $errors->first('int_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group-inline">
            <label for="int_ale_ser">Avisar</label>
            {{ Form::text('int_ale_ser', $servicio->int_ale_ser, ['id' => 'int_ale_ser', 'class' => 'form-control custom-input']) }}
            <span>antes de cumplirse el intervalo para mantenimiento.</span>
        </div>

    </div>
        <div class="form-group">
            {{ Form::label('Alerta') }}
            {{ Form::text('ale_ser', $servicio->ale_ser, ['class' => 'form-control' . ($errors->has('ale_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ale_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('cos_ser', $servicio->cos_ser, ['id' => 'cos_ser', 'class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el costo de mano de obra']) }}
            {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-body form-grid">
        <div class="form-group">
            {{ Form::label('Almacen') }}
            {{ Form::select('alm_ser', $almacenes->pluck('componente.nom_com', 'cod_alm'), $servicio->alm_ser, ['class' => 'form-control' . ($errors->has('alm_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar componente']) }}
            {!! $errors->first('alm_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::number('can_ser', $servicio->can_ser, ['class' => 'form-control' . ($errors->has('can_ser') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('can_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

<style>
    /* Agregamos estilos para la cuadrícula */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Dos columnas con el mismo ancho */
        gap: 10px; /* Espacio de 10px entre las columnas */
    }

    /* Estilos adicionales para los campos y etiquetas */
    .form-group-column {
        display: flex;
        flex-direction: column;
    }

    .form-group-inline {
        display: flex;
        align-items: center;
    }

    /* Estilos para el label */
    .form-group label {
        margin-right: 5px;
    }

    /* Estilo cuando el mouse no está encima */
    .custom-btn {
        font-weight: bold; /* Ajusta el grosor del texto */
    }

    .form-group input[type="text"] {
        flex: 1;
    }

    /* Cambiar el ancho del campo input */
    .custom-input {
        width: 80px; /* Cambia el valor según el ancho que desees */
    }
</style>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const tipoPreventivo = document.getElementById('tipo-preventivo');
        const tipoCorrectivo = document.getElementById('tipo-correctivo');
        const fallaField = document.getElementById('falla-field');
        const codSerField = document.getElementById('cod_ser');
        const sisSerField = document.getElementById('sis_ser');
        const actSerField = document.getElementById('act_ser');

        // Función para mostrar u ocultar el campo "Falla"
        function toggleFallaField() {
            if (tipoCorrectivo.checked) {
                fallaField.style.display = 'block';
            } else {
                fallaField.style.display = 'none';
            }
        }

        // Llamamos a la función para que se ejecute inicialmente con el valor predeterminado
        toggleFallaField();

        // Agregamos el evento 'change' al campo "Tipo de servicio" para que llame a la función cuando cambie
        tipoCorrectivo.addEventListener('change', toggleFallaField);
        tipoPreventivo.addEventListener('change', toggleFallaField);

        // Agregamos evento al campo "Sistema" para actualizar el código de servicio
        sisSerField.addEventListener('change', function () {
            const sistemaValue = sisSerField.value;
            const codigoActividadValue = actSerField.value.padStart(2, '0');
            const codigoSistemaValue = sistemaValue.padStart(2, '0');
            codSerField.value = codigoSistemaValue + codigoActividadValue + getNextServiceCode();
        });

        // Agregamos evento al campo "Actividad" para actualizar el código de servicio
        actSerField.addEventListener('change', function () {
            const sistemaValue = sisSerField.value;
            const codigoActividadValue = actSerField.value.padStart(2, '0');
            const codigoSistemaValue = sistemaValue.padStart(2, '0');
            codSerField.value = codigoSistemaValue + codigoActividadValue + getNextServiceCode();
        });

        // Función para obtener el próximo número de tres dígitos para el código del servicio
        function getNextServiceCode() {
            // Aquí debes implementar la lógica para obtener el próximo número de tres dígitos (autoincremental)
            // Puedes usar una lógica similar a como se hace para obtener el siguiente número de factura o transacción en un sistema
            // Por ejemplo, consultar la base de datos para obtener el último número de servicio y luego incrementarlo en 1.
            // Si no tienes acceso a una base de datos, puedes almacenar el último número en una variable global y aumentarlo en cada uso.
            // Aquí, asumiremos que tienes la función getNextNumberFromDatabase() para obtener el siguiente número de servicio.
            // Reemplaza esta función con tu lógica real.

            // Ejemplo: Obtenemos el último número de servicio (reemplaza esto con tu lógica real)
            const lastServiceNumber = 1;

            // Incrementamos el número y lo formateamos con ceros a la izquierda para obtener un número de tres dígitos
            const nextServiceNumber = (lastServiceNumber + 1).toString().padStart(3, '0');

            return nextServiceNumber;
        };
    });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Función para agregar separadores de miles
    function addThousandSeparators(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Campos que deseas formatear
        var cosComInput = document.getElementById('cos_ser');
        var intSerInput = document.getElementById('int_ser');
        var intAleSerInput = document.getElementById('int_ale_ser');

        // Agregamos un evento a los campos para formatearlos cuando cambien
        cosComInput.addEventListener('input', formatCost);
        intSerInput.addEventListener('input', formatInterval);
        intAleSerInput.addEventListener('input', formatInterval);

        // Agregamos un evento al formulario para quitar los puntos antes de enviarlo
        cosComInput.closest('form').addEventListener('submit', removeDots);
        intSerInput.closest('form').addEventListener('submit', removeDots);
        intAleSerInput.closest('form').addEventListener('submit', removeDots);

        // Función para formatear el campo "Costo"
        function formatCost() {
            // Obtener el valor del campo sin los puntos
            var rawValue = cosComInput.value.replace(/\./g, '');

            // Formatear el valor con separadores de miles y asignarlo al campo nuevamente
            cosComInput.value = addThousandSeparators(rawValue);
        }

        // Función para formatear los campos "Intervalo" y "Avisar"
        function formatInterval() {
            // Obtener el valor del campo sin los puntos
            var rawValue = this.value.replace(/\./g, '');

            // Formatear el valor con separadores de miles y asignarlo al campo nuevamente
            this.value = addThousandSeparators(rawValue);
        }

        // Función para quitar los puntos antes de enviar el formulario
        function removeDots() {
            cosComInput.value = cosComInput.value.replace(/\./g, '');
            intSerInput.value = intSerInput.value.replace(/\./g, '');
            intAleSerInput.value = intAleSerInput.value.replace(/\./g, '');
        }
    });
</script>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'pattern' => '[0-9]{4}', 'maxlength' => '4', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::select('tip_ser_ser', $tiposServicios, $servicio->tip_ser_ser, ['class' => 'form-control' . ($errors->has('tip_ser_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar tipo de servicio']) }}
            {!! $errors->first('tip_ser_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_ser', $servicio->desc_ser, ['class' => 'form-control' . ($errors->has('desc_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('kil_ser', $servicio->kil_ser, ['class' => 'form-control' . ($errors->has('kil_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('kil_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
             <?php
              $cos_ser_formatted = number_format($servicio->cos_ser, 2, ',', '.');
             ?>
           {{ Form::text('cos_ser', $cos_ser_formatted, ['id' => 'cos_ser', 'class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
           {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_ser', $empresas, $servicio->emp_ser, ['class' => 'form-control' . ($errors->has('emp_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>


<script>
    // Obtener el campo de input del costo
    var cosComInput = document.getElementById('cos_ser');

    // Escuchar el evento de entrada en el campo de input
    cosComInput.addEventListener('input', function(event) {
        // Obtener el valor sin separadores de miles
        var rawValue = event.target.value.replace(/\./g, '');

        // Formatear el valor con separadores de miles y decimales
        var formattedValue = addThousandSeparators(rawValue, 2);

        // Mostrar el valor formateado en el campo de input
        event.target.value = formattedValue;
    });

    // Función para agregar separadores de miles y decimales
    function addThousandSeparators(value, decimalPlaces) {
        var parts = value.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        var formattedValue = parts.join(".");
        
        if (decimalPlaces && parts.length > 1) {
            formattedValue += '.' + parts[1].slice(0, decimalPlaces);
        }

        return formattedValue;
    }

    // Escuchar el evento de envío del formulario
    cosComInput.closest('form').addEventListener('submit', function(event) {
        // Eliminar los separadores de miles antes de enviar el formulario
        var rawValue = cosComInput.value.replace(/\./g, '');
        cosComInput.value = rawValue;
    });
</script>
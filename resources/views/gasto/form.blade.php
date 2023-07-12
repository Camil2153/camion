<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_gas', $gasto->cod_gas, ['class' => 'form-control' . ($errors->has('cod_gas') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
             <?php
              $mon_gas_formatted = number_format($gasto->mon_gas, 2, ',', '.');
             ?>
           {{ Form::text('mon_gas', $mon_gas_formatted, ['id' => 'mon_gas', 'class' => 'form-control' . ($errors->has('mon_gas') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
           {!! $errors->first('mon_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_gas', $gasto->fec_gas, ['class' => 'form-control' . ($errors->has('fec_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('cat_gas', $categorias, $gasto->cat_gas, ['class' => 'form-control' . ($errors->has('cat_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
            {!! $errors->first('cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Viaje') }}
            {{ Form::select('via_gas', $viajes, $gasto->via_gas, ['class' => 'form-control' . ($errors->has('via_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar viaje']) }}
            {!! $errors->first('via_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_gas', $empresas, $gasto->emp_gas, ['class' => 'form-control' . ($errors->has('emp_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('gastos.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>

<script>
    // Obtener el campo de input del costo
    var cosComInput = document.getElementById('mon_gas');

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
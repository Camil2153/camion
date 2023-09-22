<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_gas', $gasto->cod_gas, ['class' => 'form-control' . ($errors->has('cod_gas') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('mon_gas', $gasto->mon_gas, ['id' => 'mon_gas', 'class' => 'form-control' . ($errors->has('mon_gas') ? ' is-invalid' : '')]) }}
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
            @if ($viajeAsociado)
                {{ Form::text('via_gas', $viajeAsociado, ['class' => 'form-control', 'readonly' => 'readonly']) }}
            @else
                {{ Form::select('via_gas', $viajes, $gasto->via_gas, ['class' => 'form-control' . ($errors->has('via_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar viaje']) }}
            @endif
            {!! $errors->first('via_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('est_gas', 'Estado') }}
            @if (Route::currentRouteName() === 'gastos.edit')
            {{ Form::select('est_gas', ['pendiente' => 'Pendiente', 'aprobado' => 'Aprobado'], $gasto->est_gas, ['class' => 'form-control' . ($errors->has('est_gas') ? ' is-invalid' : '')]) }}
            @else
            {{ Form::select('est_gas', ['pendiente' => 'Pendiente', 'aprobado' => 'Aprobado'], 'pendiente', ['class' => 'form-control' . ($errors->has('est_gas') ? ' is-invalid' : ''), 'disabled' => 'disabled']) }}
            @endif
            {!! $errors->first('est_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('gastos.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

    <script>
    var cosComInput = document.getElementById('mon_gas');

    cosComInput.closest('form').addEventListener('submit', function(event) {
        // Obtener el valor del campo de costo sin los separadores de miles
        var rawValue = cosComInput.value.replace(/\./g, '');

        // Eliminar los dos ceros innecesarios del final
        var sanitizedValue = rawValue.replace(/\.00$/, '');

        // Agregar separadores de miles
        var formattedValue = addThousandSeparators(sanitizedValue, 2);
        
        // Asignar el valor formateado al campo de costo antes de enviar el formulario
        cosComInput.value = formattedValue;
    });
    </script>
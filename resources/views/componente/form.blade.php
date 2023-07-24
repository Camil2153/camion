<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Número de serie') }}
            {{ Form::text('num_ser_com', $componente->num_ser_com, ['class' => 'form-control' . ($errors->has('num_ser_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('num_ser_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_com', $componente->nom_com, ['class' => 'form-control' . ($errors->has('nom_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('mar_com', $componente->mar_com, ['class' => 'form-control' . ($errors->has('mar_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('mar_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_com', $componente->desc_com, ['class' => 'form-control' . ($errors->has('desc_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
             <?php
              $cos_com_formatted = number_format($componente->cos_com, 2, ',', '.');
             ?>
           {{ Form::text('cos_com', $cos_com_formatted, ['id' => 'cos_com', 'class' => 'form-control' . ($errors->has('cos_com') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
           {!! $errors->first('cos_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('sis_com', $sistemas, $componente->sis_com, ['class' => 'form-control' . ($errors->has('sis_com') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema']) }}
            {!! $errors->first('sis_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('componentes.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>

<script>
    // Obtener el campo de input del costo
    var cosComInput = document.getElementById('cos_com');

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
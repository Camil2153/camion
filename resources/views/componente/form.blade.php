<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Número de serie') }}
            {{ Form::text('num_ser_com', $componente->num_ser_com, ['class' => 'form-control' . ($errors->has('num_ser_com') ? ' is-invalid' : ''), 'maxlength' => '15']) }}
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
            // Formatear el costo con separador de miles y millones
            $cos_com_formatted = number_format($componente->cos_com, 0, ',', '.');
            ?>
            {{ Form::text('cos_com', $cos_com_formatted, ['id' => 'cos_com', 'class' => 'form-control' . ($errors->has('cos_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cos_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('sis_com', $sistemas, $componente->sis_com, ['class' => 'form-control' . ($errors->has('sis_com') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema']) }}
            {!! $errors->first('sis_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>
        <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('componentes.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>


<script>
    var cosComInput = document.getElementById('cos_com');

    cosComInput.closest('form').addEventListener('submit', function(event) {
        // Obtener el valor del campo de costo sin los separadores de miles ni comas
        var rawValue = cosComInput.value.replace(/\./g, '');

        // Asignar el valor formateado sin separadores al campo de costo antes de enviar el formulario
        cosComInput.value = rawValue;
    });

    // Agregar evento al campo "Costo" para formatear con separador de miles y millones cuando se pierde el foco
    cosComInput.addEventListener('blur', function(event) {
        // Obtener el valor del campo de costo sin los separadores de miles
        var rawValue = cosComInput.value.replace(/\./g, '');

        // Formatear el valor con separador de miles y millones y asignarlo de nuevo al campo
        var formattedValue = new Intl.NumberFormat('es-ES').format(rawValue);
        cosComInput.value = formattedValue;
    });
</script>

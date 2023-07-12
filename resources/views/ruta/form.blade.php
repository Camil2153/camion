<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_rut', $ruta->cod_rut, ['class' => 'form-control' . ($errors->has('cod_rut') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_rut', $ruta->nom_rut, ['class' => 'form-control' . ($errors->has('nom_rut') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ori_rut', 'Origen') }}
            {{ Form::select('ori_rut', $ciudades, $ruta->ori_rut, ['class' => 'form-control' . ($errors->has('ori_rut') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una ciudad']) }}
            {!! $errors->first('ori_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des_rut', 'Destino') }}
            {{ Form::select('des_rut', $ciudades, $ruta->des_rut, ['class' => 'form-control' . ($errors->has('des_rut') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una ciudad']) }}
            {!! $errors->first('des_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('Distancia (km)') }}
    <?php
        $dis_rut_formatted = number_format($ruta->dis_rut, 0, ',', '.');
    ?>
    {{ Form::text('dis_rut', $dis_rut_formatted, ['id' => 'dis_rut', 'class' => 'form-control' . ($errors->has('dis_rut') ? ' is-invalid' : ''), 'placeholder' => '']) }}
    {!! $errors->first('dis_rut', '<div class="invalid-feedback">:message</div>') !!}
</div>
        <div class="form-group">
            {{ Form::label('Duración') }}
            {{ Form::text('dur_rut', $ruta->dur_rut, ['class' => 'form-control' . ($errors->has('dur_rut') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dur_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Restricciones') }}
            {{ Form::text('res_rut', $ruta->res_rut, ['class' => 'form-control' . ($errors->has('res_rut') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Complejidad') }}
            {{ Form::select('com_rut', ['Fácil' => 'Fácil', 'Moderado' => 'Moderado', 'Difícil' => 'Difícil'], $ruta->com_rut, ['class' => 'form-control' . ($errors->has('com_rut') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar nivel']) }}
            {!! $errors->first('com_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_rut', ['Bueno estado' => 'Buen estado', 'Regular estado' => 'Regular estado', 'Mal estado' => 'Mal estado', 'Cerrada' => 'Cerrada', 'En construcción' => 'En construcción'], $ruta->est_rut, ['class' => 'form-control' . ($errors->has('est_rut') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_rut', $empresas, $ruta->emp_rut, ['class' => 'form-control' . ($errors->has('emp_rut') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('rutas.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>


<script>
    // Obtener el campo de input de la distancia
    var disRutInput = document.getElementById('dis_rut');

    // Escuchar el evento de entrada en el campo de input
    disRutInput.addEventListener('input', function(event) {
        // Obtener el valor sin separadores de miles
        var rawValue = event.target.value.replace(/\./g, '');

        // Formatear el valor con separadores de miles
        var formattedValue = addThousandSeparators(rawValue);

        // Mostrar el valor formateado en el campo de input
        event.target.value = formattedValue;
    });

    // Función para agregar separadores de miles
    function addThousandSeparators(value) {
        var parts = value.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }

    // Escuchar el evento de envío del formulario
    disRutInput.closest('form').addEventListener('submit', function(event) {
        // Eliminar los separadores de miles antes de enviar el formulario
        var rawValue = disRutInput.value.replace(/\./g, '');
        disRutInput.value = rawValue;
    });
</script>
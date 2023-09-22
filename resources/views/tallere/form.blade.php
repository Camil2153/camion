<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('nit_tal', $tallere->nit_tal, ['class' => 'form-control' . ($errors->has('nit_tal') ? ' is-invalid' : ''), 'pattern' => '[0-9]{9}', 'maxlength' => '9', 'placeholder' => 'Ingrese el NIT sin guiones ni puntos']) }}
            {!! $errors->first('nit_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_tal', $tallere->nom_tal, ['class' => 'form-control' . ($errors->has('nom_tal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('dir_tal', $tallere->dir_tal, ['class' => 'form-control' . ($errors->has('dir_tal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dir_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Servicios') }}
            {{ Form::select('ser_tal', ['reparación mecánica' => 'Reparación mecánica', 'mantenimiento' => 'Mantenimiento', 'servicio de neumáticos' => 'Servicio de neumáticos'], $tallere->ser_tal, ['class' => 'form-control' . ($errors->has('ser_tal') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una opción']) }}
            {!! $errors->first('ser_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario') }}
            {{ Form::text('hor_tal', $tallere->hor_tal, ['class' => 'form-control' . ($errors->has('hor_tal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hor_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de Contacto') }}
            {{ Form::text('num_con_tal', $tallere->num_con_tal, ['class' => 'form-control' . ($errors->has('num_con_tal') ? ' is-invalid' : ''), 'pattern' => '[0-9]{10}', 'maxlength' => '10']) }}
            {!! $errors->first('num_con_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            @if ($rutaAsociada)
                {{ Form::select('rut_tal', [$rutaPredeterminada => $rutaAsociada->nom_rut], $rutaPredeterminada, ['class' => 'form-control', 'readonly' => 'readonly']) }}
            @else
                {{ Form::select('rut_tal', $rutas, $rutaPredeterminada, ['class' => 'form-control' . ($errors->has('rut_tal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar ruta']) }}
            @endif
            {!! $errors->first('rut_tal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('talleres.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>
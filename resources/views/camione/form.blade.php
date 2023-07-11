<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::text('pla_cam', $camione->pla_cam, ['class' => 'form-control' . ($errors->has('pla_cam') ? ' is-invalid' : ''), 'placeholder' => 'AAA111']) }}
            {!! $errors->first('pla_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('mar_cam', $camione->mar_cam, ['class' => 'form-control' . ($errors->has('mar_cam') ? ' is-invalid' : '')]) }}
            {!! $errors->first('mar_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::selectRange('mod_cam', date('Y') - 70, date('Y') + 1, $camione->mod_cam, ['class' => 'form-control' . ($errors->has('mod_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un año']) }}
            {!! $errors->first('mod_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::select('tip_cam', ['convencional' => 'Convencional', 'plataforma plana' => 'Plataforma Plana', 'cisterna' => 'Cisterna', 'volteo' => 'Volteo', 'refrigerado' => 'Refrigerado', 'portacontenedores' => 'Portacontenedores'], $camione->tip_cam, ['class' => 'form-control' . ($errors->has('tip_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar tipo']) }}
            {!! $errors->first('tip_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_cam', ['disponible' => 'Disponible', 'en mantenimiento' => 'En Mantenimiento', 'fuera de servicio' => 'Fuera de Servicio'], $camione->est_cam, ['class' => 'form-control' . ($errors->has('est_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::number('kil_cam', $camione->kil_cam, ['class' => 'form-control' . ($errors->has('kil_cam') ? ' is-invalid' : ''), 'step' => 1, 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
            {!! $errors->first('kil_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Capacidad (Toneladas)') }}
            {{ Form::number('cap_cam', $camione->cap_cam, ['class' => 'form-control' . ($errors->has('cap_cam') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
            {!! $errors->first('cap_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Promedio de combustible') }}
            {{ Form::number('cont_cam', $camione->cont_cam, ['class' => 'form-control' . ($errors->has('cont_cam') ? ' is-invalid' : ''), 'min' => 0, 'step' => 'any','placeholder' => '']) }}
            {!! $errors->first('cont_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conductor') }}
            {{ Form::select('con_cam', $conductores, $camione->con_cam, ['class' => 'form-control' . ($errors->has('con_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar conductor']) }}
            {!! $errors->first('con_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_cam', $empresas, $camione->emp_cam, ['class' => 'form-control' . ($errors->has('emp_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('camiones.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>

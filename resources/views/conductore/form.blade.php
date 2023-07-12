<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
        {{ Form::label('DNI') }}
        {{ Form::text('dni_con', $conductore->dni_con, ['class' => 'form-control' . ($errors->has('dni_con') ? ' is-invalid' : ''), 'pattern' => '[0-9]{6, 10}', 'maxlength' => '10', 'placeholder' => 'inserte DNI sin puntos ni comas']) }}
        {!! $errors->first('dni_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Nombre') }}
        {{ Form::text('nom_con', $conductore->nom_con, ['class' => 'form-control' . ($errors->has('nom_con') ? ' is-invalid' : '')]) }}
        {!! $errors->first('nom_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Fecha de nacimiento') }}
        {{ Form::date('fec_nac_con', $conductore->fec_nac_con, ['class' => 'form-control' . ($errors->has('fec_nac_con') ? ' is-invalid' : ''), 'max' => date('Y-m-d')]) }}
        {!! $errors->first('fec_nac_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Dirrección') }}
        {{ Form::text('dir_con', $conductore->dir_con, ['class' => 'form-control' . ($errors->has('dir_con') ? ' is-invalid' : '')]) }}
        {!! $errors->first('dir_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Número de teléfono') }}
        {{ Form::text('num_tel_con', $conductore->num_tel_con, ['class' => 'form-control' . ($errors->has('num_tel_con') ? ' is-invalid' : ''), 'pattern' => '[0-9]{10}', 'maxlength' => '10']) }}
        {!! $errors->first('num_tel_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Correo electrónico') }}
        {{ Form::email('cor_ele_con', $conductore->cor_ele_con, ['class' => 'form-control' . ($errors->has('cor_ele_con') ? ' is-invalid' : '')]) }}
        {!! $errors->first('cor_ele_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group">
        {{ Form::label('Empresa') }}
        {{ Form::select('emp_con', $empresas, $conductore->emp_con, ['class' => 'form-control' . ($errors->has('emp_con') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
        {!! $errors->first('emp_con', '<div class="invalid-feedback">:message</div>') !!}
    </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('conductores.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
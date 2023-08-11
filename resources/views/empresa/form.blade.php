<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('nit_emp', $empresa->nit_emp, ['class' => 'form-control' . ($errors->has('nit_emp') ? ' is-invalid' : ''), 'pattern' => '[0-9]{9}', 'maxlength' => '9', 'placeholder' => 'Ingrese el NIT sin guiones ni puntos']) }}
            {!! $errors->first('nit_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_emp', $empresa->nom_emp, ['class' => 'form-control' . ($errors->has('nom_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::text('pai_emp', $empresa->pai_emp, ['id' => 'pai_emp', 'class' => 'form-control' . ($errors->has('pai_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('pai_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Region') }}
            {{ Form::text('reg_emp', $empresa->reg_emp, ['id' => 'reg_emp', 'class' => 'form-control' . ($errors->has('reg_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('reg_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Código postal') }}
            {{ Form::text('cod_pos_emp', $empresa->cod_pos_emp, ['class' => 'form-control' . ($errors->has('cod_pos_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_pos_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('dir_emp', $empresa->dir_emp, ['class' => 'form-control' . ($errors->has('dir_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dir_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('empresas.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>
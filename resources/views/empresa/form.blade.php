<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('nit_emp', $empresa->nit_emp, ['class' => 'form-control' . ($errors->has('nit_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nit_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_emp', $empresa->nom_emp, ['class' => 'form-control' . ($errors->has('nom_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('dir_emp', $empresa->dir_emp, ['class' => 'form-control' . ($errors->has('dir_emp') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dir_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::select('pai_emp', $paises, $empresa->pai_emp, ['class' => 'form-control' . ($errors->has('pai_emp') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar pais']) }}
            {!! $errors->first('pai_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('empresas.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
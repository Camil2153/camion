<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_sis', $sistema->cod_sis, ['class' => 'form-control' . ($errors->has('cod_sis') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_sis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_sis', $sistema->nom_sis, ['class' => 'form-control' . ($errors->has('nom_sis') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_sis', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('sistemas.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
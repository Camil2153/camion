<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_pai', $paise->cod_pai, ['class' => 'form-control' . ($errors->has('cod_pai') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_pai', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_pai', $paise->nom_pai, ['class' => 'form-control' . ($errors->has('nom_pai') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_pai', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('paises.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
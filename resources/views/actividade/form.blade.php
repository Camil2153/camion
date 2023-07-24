<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_act', $actividade->cod_act, ['class' => 'form-control' . ($errors->has('cod_act') ? ' is-invalid' : ''), 'placeholder' => '11']) }}
            {!! $errors->first('cod_act', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_act', $actividade->nom_act, ['class' => 'form-control' . ($errors->has('nom_act') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_act', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('almacenes.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
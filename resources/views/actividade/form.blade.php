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
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('act_sis', $sistemas, $actividade->act_sis, ['class' => 'form-control' . ($errors->has('act_sis') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema', 'id' => 'act_sis']) }}
            {!! $errors->first('act_sis', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>
        <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('actividades.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
</div>
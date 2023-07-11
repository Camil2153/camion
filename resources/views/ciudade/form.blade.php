<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ciu', $ciudade->cod_ciu, ['class' => 'form-control' . ($errors->has('cod_ciu') ? ' is-invalid' : ''), 'maxlength' => '3', 'pattern' => '[0-9]{1,3}', 'placeholder' => '111']) }}
            {!! $errors->first('cod_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_ciu', $ciudade->nom_ciu, ['class' => 'form-control' . ($errors->has('nom_ciu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pais') }}
            {{ Form::select('pai_ciu', $paises, $ciudade->pai_ciu, ['class' => 'form-control' . ($errors->has('pai_ciu') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar pais']) }}
            {!! $errors->first('pai_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('ciudades.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
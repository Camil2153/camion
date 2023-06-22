<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ciu', $ciudade->cod_ciu, ['class' => 'form-control' . ($errors->has('cod_ciu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_ciu', $ciudade->nom_ciu, ['class' => 'form-control' . ($errors->has('nom_ciu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Departamento') }}
            {{ Form::text('dep_ciu', $ciudade->dep_ciu, ['class' => 'form-control' . ($errors->has('dep_ciu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dep_ciu', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('ciudades.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
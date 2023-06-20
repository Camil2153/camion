<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_cat_gas', $categoriagasto->nom_cat_gas, ['class' => 'form-control' . ($errors->has('nom_cat_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('des_cat_gas', $categoriagasto->des_cat_gas, ['class' => 'form-control' . ($errors->has('des_cat_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('des_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('categoriagastos.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
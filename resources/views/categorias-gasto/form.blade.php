<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_cat_gas', $categoriasGasto->cod_cat_gas, ['class' => 'form-control' . ($errors->has('cod_cat_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_cat_gas', $categoriasGasto->nom_cat_gas, ['class' => 'form-control' . ($errors->has('nom_cat_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_cat_gas', $categoriasGasto->desc_cat_gas, ['class' => 'form-control' . ($errors->has('desc_cat_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_cat_gas', $empresas, $categoriasGasto->emp_cat_gas, ['class' => 'form-control' . ($errors->has('emp_cat_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('categorias-gastos.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
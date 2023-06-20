<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_gas', $gasto->fec_gas, ['class' => 'form-control' . ($errors->has('fec_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('mon_gas', $gasto->mon_gas, ['class' => 'form-control' . ($errors->has('mon_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('mon_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('des_gas', $gasto->des_gas, ['class' => 'form-control' . ($errors->has('des_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('des_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('categoriagastos_id', $categorias, $gasto->categoriagastos_id, ['class' => 'form-control' . ($errors->has('categoriagastos_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoría']) }}
            {!! $errors->first('categoriagastos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('gastos.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
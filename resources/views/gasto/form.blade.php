<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_gas', $gasto->cod_gas, ['class' => 'form-control' . ($errors->has('cod_gas') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            {{ Form::text('mon_gas', $gasto->mon_gas, ['class' => 'form-control' . ($errors->has('mon_gas') ? ' is-invalid' : ''), 'step' => 1, 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
            {!! $errors->first('mon_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_gas', $gasto->fec_gas, ['class' => 'form-control' . ($errors->has('fec_gas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('cat_gas', $categorias, $gasto->cat_gas, ['class' => 'form-control' . ($errors->has('cat_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
            {!! $errors->first('cat_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Viaje') }}
            {{ Form::select('via_gas', $viajes, $gasto->via_gas, ['class' => 'form-control' . ($errors->has('via_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar viaje']) }}
            {!! $errors->first('via_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_gas', $empresas, $gasto->emp_gas, ['class' => 'form-control' . ($errors->has('emp_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('gastos.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_tip_ser', $tiposServicio->cod_tip_ser, ['class' => 'form-control' . ($errors->has('cod_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_tip_ser', $tiposServicio->nom_tip_ser, ['class' => 'form-control' . ($errors->has('nom_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_tip_ser', $tiposServicio->desc_tip_ser, ['class' => 'form-control' . ($errors->has('desc_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo de Tiempo') }}
            {{ Form::text('int_tie_tip_ser', $tiposServicio->int_tie_tip_ser, ['class' => 'form-control' . ($errors->has('int_tie_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_tie_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo de Kilometraje') }}
            {{ Form::text('int_kil_tip_ser', $tiposServicio->int_kil_tip_ser, ['class' => 'form-control' . ($errors->has('int_kil_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_kil_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_tip_ser', $empresas, $tiposServicio->emp_tip_ser, ['class' => 'form-control' . ($errors->has('emp_tip_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('tipos-servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'placeholder' => 'Cod Ser']) }}
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo servicio') }}
            {{ Form::select('tip_ser_ser', $tiposervicios, $servicio->tip_ser_ser, ['class' => 'form-control' . ($errors->has('tip_ser_ser') ? ' is-invalid' : ''), 'placeholder' => 'Tip Ser Ser']) }}
            {!! $errors->first('tip_ser_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('camion') }}
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion servicio') }}
            {{ Form::text('des_tip_ser', $servicio->des_tip_ser, ['class' => 'form-control' . ($errors->has('des_tip_ser') ? ' is-invalid' : ''), 'placeholder' => 'Des Tip Ser']) }}
            {!! $errors->first('des_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha servicio') }}
            {{ Form::text('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : ''), 'placeholder' => 'Fec Ser']) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje') }}
            {{ Form::text('kil_ser', $servicio->kil_ser, ['class' => 'form-control' . ($errors->has('kil_ser') ? ' is-invalid' : ''), 'placeholder' => 'Kil Ser']) }}
            {!! $errors->first('kil_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::text('cos_ser', $servicio->cos_ser, ['class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : ''), 'placeholder' => 'Cos Ser']) }}
            {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('res_ser') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : ''), 'placeholder' => 'Res Ser']) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_gas', $empresas, $servicio->emp_gas, ['class' => 'form-control' . ($errors->has('emp_gas') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_gas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
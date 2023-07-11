<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
<<<<<<< HEAD
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'pattern' => '[0-9]{4}', 'maxlength' => '4', 'placeholder' => '1111']) }}
=======
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : '')]) }}
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::select('tip_ser_ser', $tiposServicios, $servicio->tip_ser_ser, ['class' => 'form-control' . ($errors->has('tip_ser_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar tipo de servicio']) }}
            {!! $errors->first('tip_ser_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_ser', $servicio->desc_ser, ['class' => 'form-control' . ($errors->has('desc_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('kil_ser', $servicio->kil_ser, ['class' => 'form-control' . ($errors->has('kil_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('kil_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
<<<<<<< HEAD
            {{ Form::number('cos_ser', $servicio->cos_ser, ['class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : ''), 'step' => '0.01', 'min' => '0']) }}
=======
            {{ Form::text('cos_ser', $servicio->cos_ser, ['class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : '')]) }}
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
            {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_ser', $empresas, $servicio->emp_ser, ['class' => 'form-control' . ($errors->has('emp_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
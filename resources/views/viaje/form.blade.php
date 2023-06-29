<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('cod_via', $viaje->cod_via, ['class' => 'form-control' . ($errors->has('cod_via') ? ' is-invalid' : ''), 'placeholder' => 'Cod Via']) }}
            {!! $errors->first('cod_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carga') }}
            {{ Form::text('car_via', $viaje->car_via, ['class' => 'form-control' . ($errors->has('car_via') ? ' is-invalid' : ''), 'placeholder' => 'Car Via']) }}
            {!! $errors->first('car_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('pes_via', $viaje->pes_via, ['class' => 'form-control' . ($errors->has('pes_via') ? ' is-invalid' : ''), 'placeholder' => 'Pes Via']) }}
            {!! $errors->first('pes_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_cam', ['disponible' => 'Programado', 'En progreso' => 'Completado', 'Cancelado'], $viaje->est_cam, ['class' => 'form-control' . ($errors->has('est_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de salida') }}
            {{ Form::text('fec_sal_via', $viaje->fec_sal_via, ['class' => 'form-control' . ($errors->has('fec_sal_via') ? ' is-invalid' : ''), 'placeholder' => 'Fec Sal Via']) }}
            {!! $errors->first('fec_sal_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de salida') }}
            {{ Form::text('hor_sal_via', $viaje->hor_sal_via, ['class' => 'form-control' . ($errors->has('hor_sal_via') ? ' is-invalid' : ''), 'placeholder' => 'Hor Sal Via']) }}
            {!! $errors->first('hor_sal_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de llegada') }}
            {{ Form::text('fec_lle_via', $viaje->fec_lle_via, ['class' => 'form-control' . ($errors->has('fec_lle_via') ? ' is-invalid' : ''), 'placeholder' => 'Fec Lle Via']) }}
            {!! $errors->first('fec_lle_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de llegada') }}
            {{ Form::text('hor_lle_via', $viaje->hor_lle_via, ['class' => 'form-control' . ($errors->has('hor_lle_via') ? ' is-invalid' : ''), 'placeholder' => 'Hor Lle Via']) }}
            {!! $errors->first('hor_lle_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('kil_via', $viaje->kil_via, ['class' => 'form-control' . ($errors->has('kil_via') ? ' is-invalid' : ''), 'placeholder' => 'Kil Via']) }}
            {!! $errors->first('kil_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Consumo de combustible') }}
            {{ Form::text('com_via', $viaje->com_via, ['class' => 'form-control' . ($errors->has('com_via') ? ' is-invalid' : ''), 'placeholder' => 'Com Via']) }}
            {!! $errors->first('com_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion asignado') }}
            {{ Form::select('cam_via', $camiones, $viaje->cam_via, ['class' => 'form-control' . ($errors->has('cam_via') ? ' is-invalid' : ''), 'placeholder' => 'Cam Via']) }}
            {!! $errors->first('cam_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('cli_via', $clientes, $viaje->cli_via, ['class' => 'form-control' . ($errors->has('cli_via') ? ' is-invalid' : ''), 'placeholder' => 'Cli Via']) }}
            {!! $errors->first('cli_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::select('rut_via', $rutas, $viaje->rut_via, ['class' => 'form-control' . ($errors->has('rut_via') ? ' is-invalid' : ''), 'placeholder' => 'Rut Via']) }}
            {!! $errors->first('rut_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_via', $empresas, $viaje->emp_via, ['class' => 'form-control' . ($errors->has('emp_via') ? ' is-invalid' : ''), 'placeholder' => 'Emp Via']) }}
            {!! $errors->first('emp_via', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('viajes.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
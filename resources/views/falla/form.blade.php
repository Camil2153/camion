<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_fal', $falla->cod_fal, ['class' => 'form-control' . ($errors->has('cod_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Componente') }}
            {{ Form::select('com_fal', $componentes, $falla->com_fal, ['class' => 'form-control' . ($errors->has('com_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar componente']) }}
            {!! $errors->first('com_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_fal', $falla->desc_fal, ['class' => 'form-control' . ($errors->has('desc_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_fal', $falla->fec_fal, ['class' => 'form-control' . ($errors->has('fec_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('kil_fal', $falla->kil_fal, ['class' => 'form-control' . ($errors->has('kil_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('kil_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo de Inactividad') }}
            {{ Form::text('tie_ina_fal', $falla->tie_ina_fal, ['class' => 'form-control' . ($errors->has('tie_ina_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tie_ina_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gravedad') }}
            {{ Form::select('gra_fal', ['leve' => 'Leve', 'moderada' => 'Moderada', 'grave' => 'Grave'], $falla->gra_fal, ['class' => 'form-control' . ($errors->has('gra_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar gravedad']) }}
            {!! $errors->first('gra_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado Actual') }}
            {{ Form::select('est_act_fal', ['pendiente' => 'Pendiente de reparación', 'proceso' => 'En proceso de reparación', 'reparada' => 'Reparada'], $falla->est_act_fal, ['class' => 'form-control' . ($errors->has('est_act_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el estado']) }}
            {!! $errors->first('est_act_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable de Detección') }}
            {{ Form::text('res_det_fal', $falla->res_det_fal, ['class' => 'form-control' . ($errors->has('res_det_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_det_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable de Reparación') }}
            {{ Form::text('res_rep_fal', $falla->res_rep_fal, ['class' => 'form-control' . ($errors->has('res_rep_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_rep_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Acciones') }}
            {{ Form::text('acc_fal', $falla->acc_fal, ['class' => 'form-control' . ($errors->has('acc_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('acc_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('cos_fal', $falla->cos_fal, ['class' => 'form-control' . ($errors->has('cos_fal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cos_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_fal', $camiones, $falla->cam_fal, ['class' => 'form-control' . ($errors->has('cam_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_fal', $talleres, $falla->tal_fal, ['class' => 'form-control' . ($errors->has('tal_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_fal', $empresas, $falla->emp_fal, ['class' => 'form-control' . ($errors->has('emp_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('fallas.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
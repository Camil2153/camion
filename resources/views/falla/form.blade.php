<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('cod_fal', $falla->cod_fal, ['class' => 'form-control' . ($errors->has('cod_fal') ? ' is-invalid' : ''), 'placeholder' => 'Cod Fal']) }}
            {!! $errors->first('cod_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Componente') }}
            {{ Form::select('com_fal', $componentes, $falla->com_fal, ['class' => 'form-control' . ($errors->has('com_fal') ? ' is-invalid' : ''), 'placeholder' => 'Com Fal']) }}
            {!! $errors->first('com_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('des_fal', $falla->des_fal, ['class' => 'form-control' . ($errors->has('des_fal') ? ' is-invalid' : ''), 'placeholder' => 'Des Fal']) }}
            {!! $errors->first('des_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fec_fal', $falla->fec_fal, ['class' => 'form-control' . ($errors->has('fec_fal') ? ' is-invalid' : ''), 'placeholder' => 'Fec Fal']) }}
            {!! $errors->first('fec_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje') }}
            {{ Form::text('kil_fal', $falla->kil_fal, ['class' => 'form-control' . ($errors->has('kil_fal') ? ' is-invalid' : ''), 'placeholder' => 'Kil Fal']) }}
            {!! $errors->first('kil_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo de Inactividad (Hrs)') }}
            {{ Form::text('tie_ina_fal', $falla->tie_ina_fal, ['class' => 'form-control' . ($errors->has('tie_ina_fal') ? ' is-invalid' : ''), 'placeholder' => 'Tie Ina Fal']) }}
            {!! $errors->first('tie_ina_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gravedad') }}
            {{ Form::text('gra_fal', $falla->gra_fal, ['class' => 'form-control' . ($errors->has('gra_fal') ? ' is-invalid' : ''), 'placeholder' => 'Gra Fal']) }}
            {!! $errors->first('gra_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado actual') }}
            {{ Form::text('est_act_fal', $falla->est_act_fal, ['class' => 'form-control' . ($errors->has('est_act_fal') ? ' is-invalid' : ''), 'placeholder' => 'Est Act Fal']) }}
            {!! $errors->first('est_act_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsables de deteccion') }}
            {{ Form::text('res_det_fal', $falla->res_det_fal, ['class' => 'form-control' . ($errors->has('res_det_fal') ? ' is-invalid' : ''), 'placeholder' => 'Res Det Fal']) }}
            {!! $errors->first('res_det_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable de Reparacion') }}
            {{ Form::text('res_rep_fal', $falla->res_rep_fal, ['class' => 'form-control' . ($errors->has('res_rep_fal') ? ' is-invalid' : ''), 'placeholder' => 'Res Rep Fal']) }}
            {!! $errors->first('res_rep_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Acciones') }}
            {{ Form::text('acc_fal', $falla->acc_fal, ['class' => 'form-control' . ($errors->has('acc_fal') ? ' is-invalid' : ''), 'placeholder' => 'Acc Fal']) }}
            {!! $errors->first('acc_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('cos_fal', $falla->cos_fal, ['class' => 'form-control' . ($errors->has('cos_fal') ? ' is-invalid' : ''), 'placeholder' => 'Cos Fal']) }}
            {!! $errors->first('cos_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('camion') }}
            {{ Form::select('cam_fal', $camiones, $falla->cam_fal, ['class' => 'form-control' . ($errors->has('cam_fal') ? ' is-invalid' : ''), 'placeholder' => 'Cam Fal']) }}
            {!! $errors->first('cam_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Talleres') }}
            {{ Form::select('tal_fal' ,$talleres, $falla->tal_fal, ['class' => 'form-control' . ($errors->has('tal_fal') ? ' is-invalid' : ''), 'placeholder' => 'Tal Fal']) }}
            {!! $errors->first('tal_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_fal', $empresas, $falla->emp_fal, ['class' => 'form-control' . ($errors->has('emp_fal') ? ' is-invalid' : ''), 'placeholder' => 'Emp Fal']) }}
            {!! $errors->first('emp_fal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('fallas.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
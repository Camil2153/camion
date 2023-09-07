<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Código') }}
                    {{ Form::text('cod_fal', $falla->cod_fal, ['class' => 'form-control' . ($errors->has('cod_fal') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
                    {!! $errors->first('cod_fal', '<div class="invalid-feedback">:message</div>') !!}
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
                    {{ Form::number('kil_fal', $falla->kil_fal, ['class' => 'form-control' . ($errors->has('kil_fal') ? ' is-invalid' : ''), 'step' => 1, 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
                    {!! $errors->first('kil_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Gravedad') }}
                    {{ Form::select('gra_fal', ['leve' => 'Leve', 'moderada' => 'Moderada', 'grave' => 'Grave'], $falla->gra_fal, ['class' => 'form-control' . ($errors->has('gra_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar gravedad']) }}
                    {!! $errors->first('gra_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Estado Actual') }}
                    @if (Route::currentRouteName() === 'fallas.edit')
                    {{ Form::select('est_act_fal', ['pendiente' => 'Pendiente de reparación', 'proceso' => 'En proceso de reparación', 'reparada' => 'Reparada'], $falla->est_act_fal, ['class' => 'form-control' . ($errors->has('est_act_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el estado', 'disabled' => 'disabled']) }}
                    @else
                        {{ Form::select('est_act_fal', ['pendiente' => 'Pendiente de reparación', 'proceso' => 'En proceso de reparación', 'reparada' => 'Reparada'], 'pendiente', ['class' => 'form-control' . ($errors->has('est_act_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el estado', 'disabled' => 'disabled']) }}
                    @endif
                    {!! $errors->first('est_act_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Responsable de Detección') }}
                    {{ Form::text('res_det_fal', $falla->res_det_fal, ['class' => 'form-control' . ($errors->has('res_det_fal') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('res_det_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Sistema') }}
                    {{ Form::select('sis_fal', $sistemas, $falla->sis_fal, ['class' => 'form-control' . ($errors->has('sis_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema']) }}
                    {!! $errors->first('sis_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Camion') }}
                    @if (Route::currentRouteName() === 'fallas.edit')
                    {{ Form::select('cam_fal', $camiones, $falla->cam_fal, ['class' => 'form-control' . ($errors->has('cam_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion', 'disabled' => 'disabled']) }}
                    {{ Form::hidden('cam_fal', $falla->cam_fal) }}
                    @else
                    {{ Form::select('cam_fal', $camiones, $falla->cam_fal, ['class' => 'form-control' . ($errors->has('cam_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
                    @endif
                    {!! $errors->first('cam_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Rutas') }}
                    {{ Form::select('rut_fal', $rutas, $falla->rut_fal, ['class' => 'form-control' . ($errors->has('rut_fal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar ruta']) }}
                    {!! $errors->first('rut_fal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="{{ route('fallas.index') }}" class="btn btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

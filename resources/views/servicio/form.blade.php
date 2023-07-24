<div class="box box-info padding-1">
    <div class="box-body form-grid">
    
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'pattern' => '[0-9]{4}', 'maxlength' => '4', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : ''), 'placeholder' => 'Fec Ser']) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('sis_ser', $sistemas, $servicio->sis_ser, ['class' => 'form-control' . ($errors->has('sis_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema']) }}
            {!! $errors->first('sis_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_ser', ['No comenzada' => 'No comenzada', 'En curso' => 'En curso', 'Aplazada' => 'Aplazada', 'Cancelada' => 'Cancelada', 'Completada' => 'Completada'], $servicio->est_ser, ['class' => 'form-control' . ($errors->has('est_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::select('act_ser', $actividades, $servicio->act_ser, ['class' => 'form-control' . ($errors->has('act_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar actividad']) }}
            {!! $errors->first('act_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de servicio') }}
            <div class="radio-container">
                <label class="radio-custom">
                    {{ Form::radio('tip_ser', 'preventivo', $servicio->tip_ser === 'preventivo', ['required']) }}
                    Preventivo
                </label>

                <label class="radio-custom">
                    {{ Form::radio('tip_ser', 'correctivo', $servicio->tip_ser === 'correctivo', ['required']) }}
                    Correctivo
                </label>
            </div>
        </div>
    </div>
        <div class="form-group">
            {{ Form::label('Detalles') }}
            {{ Form::text('det_ser', $servicio->det_ser, ['class' => 'form-control' . ($errors->has('det_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('det_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-body form-grid">
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Falla') }}
            {{ Form::select('fal_ser', $fallas, $servicio->fal_ser, ['class' => 'form-control' . ($errors->has('fal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar falla']) }}
            {!! $errors->first('fal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo de Tiempo (días)') }}
            {{ Form::text('int_tie_tip_ser', $servicio->int_tie_tip_ser, ['class' => 'form-control' . ($errors->has('int_tie_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_tie_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo de Kilometraje') }}
            {{ Form::text('int_kil_tip_ser', $servicio->int_kil_tip_ser, ['class' => 'form-control' . ($errors->has('int_kil_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_kil_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="form-group">
            {{ Form::label('Alerta') }}
            {{ Form::text('ale_ser', $servicio->ale_ser, ['class' => 'form-control' . ($errors->has('ale_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ale_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-body form-grid">
        <div class="form-group">
            {{ Form::label('Costo') }}
            {{ Form::text('cos_ser', $servicio->cos_ser, ['class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Almacen') }}
            {{ Form::select('alm_ser', $almacenes, $servicio->alm_ser, ['class' => 'form-control' . ($errors->has('alm_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('alm_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>

<style>
    /* Agregamos estilos para la cuadrícula */
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Dos columnas con el mismo ancho */
        gap: 10px; /* Espacio del 10% entre las columnas */
    }

    /* Estilos adicionales para los campos y etiquetas */
    .form-group {
        display: flex;
        flex-direction: column;
    }

    /* Estilos para el label */
    .form-group label {
        margin-bottom: 5px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxPreventivo = document.getElementById('checkbox-preventivo');
        const checkboxCorrectivo = document.getElementById('checkbox-correctivo');

        checkboxPreventivo.addEventListener('change', function () {
            if (this.checked) {
                checkboxCorrectivo.checked = false;
            }
        });

        checkboxCorrectivo.addEventListener('change', function () {
            if (this.checked) {
                checkboxPreventivo.checked = false;
            }
        });
    });
</script>
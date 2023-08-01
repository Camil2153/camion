<div class="box box-info padding-1">
    <div class="box-body form-grid">
        <div class="column">
            <div class="form-group">
                {{ Form::label('Código') }}
                {{ Form::text('cod_via', $viaje->cod_via, ['class' => 'form-control' . ($errors->has('cod_via') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
                {!! $errors->first('cod_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Peso (T)') }}
                {{ Form::number('pes_via', $viaje->pes_via, ['class' => 'form-control' . ($errors->has('pes_via') ? ' is-invalid' : ''), 'id' => 'pes_via', 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
                {!! $errors->first('pes_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Ruta') }}
                {{ Form::select('rut_via', $rutas, $viaje->rut_via, ['class' => 'form-control' . ($errors->has('rut_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar ruta']) }}
                {!! $errors->first('rut_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Fecha de salida') }}
                {{ Form::date('fec_sal_via', $viaje->fec_sal_via, ['class' => 'form-control' . ($errors->has('fec_sal_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('fec_sal_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Hora de Salida') }}
                {{ Form::time('hor_sal_via', $viaje->hor_sal_via, ['class' => 'form-control' . ($errors->has('hor_sal_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('hor_sal_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Fecha de Llegada') }}
                {{ Form::date('fec_lle_via', $viaje->fec_lle_via, ['class' => 'form-control' . ($errors->has('fec_lle_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('fec_lle_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Hora de Llegada') }}
                {{ Form::time('hor_lle_via', $viaje->hor_lle_via, ['class' => 'form-control' . ($errors->has('hor_lle_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('hor_lle_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            </div>
            <div class="column">
            <div class="form-group">
                {{ Form::label('Camion') }}
                {{ Form::select('cam_via', $camiones, $viaje->cam_via, ['class' => 'form-control' . ($errors->has('cam_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion', 'id' => 'cam_via']) }}
                {!! $errors->first('cam_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Tipo de Carga') }}
                {{ Form::text('car_via', $viaje->car_via, ['class' => 'form-control' . ($errors->has('car_via') ? ' is-invalid' : '')]) }}
                {!! $errors->first('car_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Estado') }}
                {{ Form::select('est_via', ['programado' => 'Programado', 'en progreso' => 'En progreso', 'completado' => 'Completado', 'cancelado' => 'Cancelado'], $viaje->est_via, ['class' => 'form-control' . ($errors->has('est_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
                {!! $errors->first('est_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Combustible (Litros)') }}
                {{ Form::text('com_via', $viaje->com_via, ['class' => 'form-control' . ($errors->has('com_via') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
                {!! $errors->first('com_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Cliente') }}
                {{ Form::select('cli_via', $clientes, $viaje->cli_via, ['class' => 'form-control' . ($errors->has('cli_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar cliente']) }}
                {!! $errors->first('cli_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Empresa') }}
                {{ Form::select('emp_via', $empresas, $viaje->emp_via, ['class' => 'form-control' . ($errors->has('emp_via') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
                {!! $errors->first('emp_via', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('viajes.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
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

    /* Estilo cuando el mouse no está encima */
    .custom-btn {
        font-weight: bold; /* Ajusta el grosor del texto */
    }

    /* Agregamos estilos para las columnas */
    .column {
        display: flex;
        flex-direction: column;
    }
</style>
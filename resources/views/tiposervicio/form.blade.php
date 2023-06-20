<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::text('nom_tip_ser', $tiposervicio->nom_tip_ser, ['class' => 'form-control' . ($errors->has('nom_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descipción') }}
            {{ Form::text('des_tip_ser', $tiposervicio->des_tip_ser, ['class' => 'form-control' . ($errors->has('des_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('des_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo Tiempo') }}
            {{ Form::text('int_tie_tip_ser', $tiposervicio->int_tie_tip_ser, ['class' => 'form-control' . ($errors->has('int_tie_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_tie_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Intervalo Kilometraje') }}
            {{ Form::text('int_kil_tip_ser', $tiposervicio->int_kil_tip_ser, ['class' => 'form-control' . ($errors->has('int_kil_tip_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('int_kil_tip_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm">{{ __('Guardar') }}</button>
        <a href="  {{ route('tiposervicios.index') }}" class="btn btn-secundary border border-secondary btn-sm">Cancelar</a>
    </div>
</div>
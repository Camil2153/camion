<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_alm', $almacene->cod_alm, ['class' => 'form-control' . ($errors->has('cod_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Componente') }}
            {{ Form::select('com_alm', $componentes, $almacene->com_alm, ['class' => 'form-control' . ($errors->has('com_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar componente']) }}
            {!! $errors->first('com_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('cat_alm', ['electrónica' => 'Electrónica', 'mecánica' => 'Mecánica', 'herramientas manuales' => 'Herramientas Manuales'], $almacene->cat_alm, ['class' => 'form-control' . ($errors->has('cat_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
            {!! $errors->first('cat_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('can_alm', $almacene->can_alm, ['class' => 'form-control' . ($errors->has('can_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('can_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicación') }}
            {{ Form::text('ubi_alm', $almacene->ubi_alm, ['class' => 'form-control' . ($errors->has('ubi_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ubi_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::text('pro_alm', $almacene->pro_alm, ['class' => 'form-control' . ($errors->has('pro_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('pro_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de adquisición') }}
            {{ Form::date('fec_adq_alm', $almacene->fec_adq_alm, ['class' => 'form-control' . ($errors->has('fec_adq_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_adq_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de vencimiento') }}
            {{ Form::date('fec_ven_alm', $almacene->fec_ven_alm, ['class' => 'form-control' . ($errors->has('fec_ven_alm') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_ven_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_alm', ['disponible' => 'Disponible', 'reservado' => 'Reservado', 'en reparación' => 'En reparación', 'agotado' => 'Agotado'], $almacene->est_alm, ['class' => 'form-control' . ($errors->has('est_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_alm', $empresas, $almacene->emp_alm, ['class' => 'form-control' . ($errors->has('emp_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_alm', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('almacenes.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
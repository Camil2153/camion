<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Número de serie') }}
            {{ Form::text('num_ser_com', $componente->num_ser_com, ['class' => 'form-control' . ($errors->has('num_ser_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('num_ser_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_com', $componente->nom_com, ['class' => 'form-control' . ($errors->has('nom_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('mar_com', $componente->mar_com, ['class' => 'form-control' . ($errors->has('mar_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('mar_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_com', $componente->desc_com, ['class' => 'form-control' . ($errors->has('desc_com') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('Costo') }}
    {{ Form::number('cos_com', $componente->cos_com, ['class' => 'form-control' . ($errors->has('cos_com') ? ' is-invalid' : ''), 'step' => '0.01', 'min' => '0']) }}
    {!! $errors->first('cos_com', '<div class="invalid-feedback">:message</div>') !!}
</div>
        <div class="form-group">
            {{ Form::label('Sistema') }}
            {{ Form::select('sis_com', $sistemas, $componente->sis_com, ['class' => 'form-control' . ($errors->has('sis_com') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar sistema']) }}
            {!! $errors->first('sis_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_com', $empresas, $componente->emp_com, ['class' => 'form-control' . ($errors->has('emp_com') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('componentes.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
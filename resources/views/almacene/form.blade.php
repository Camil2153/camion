<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Código') }}
                    {{ Form::text('cod_alm', $almacene->cod_alm, ['class' => 'form-control' . ($errors->has('cod_alm') ? ' is-invalid' : ''), 'maxlength' => '4', 'pattern' => '[0-9]{4}', 'placeholder' => '1111']) }}
                    {!! $errors->first('cod_alm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Componente') }}
                    @if (Route::currentRouteName() === 'almacenes.edit')
                    {{ Form::text('componente', $almacene->componente->nom_com, ['class' => 'form-control', 'disabled' => 'disabled']) }}
                    @else
                    {{ Form::select('com_alm', $componentesFiltrados, $almacene->com_alm ?? null, ['class' => 'form-control' . ($errors->has('com_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar componente']) }}
                    @endif
                    {!! $errors->first('com_alm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Categoria') }}
                    {{ Form::select('cat_alm', ['electrónica' => 'Electrónica', 'mecánica' => 'Mecánica', 'herramientas manuales' => 'Herramientas Manuales'], $almacene->cat_alm, ['class' => 'form-control' . ($errors->has('cat_alm') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar categoria']) }}
                    {!! $errors->first('cat_alm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Cantidad') }}
                    {{ Form::number('can_alm', $almacene->can_alm, ['class' => 'form-control' . ($errors->has('can_alm') ? ' is-invalid' : ''), 'min' => '0']) }}
                    {!! $errors->first('can_alm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Ubicación') }}
                    {{ Form::text('ubi_alm', $almacene->ubi_alm, ['class' => 'form-control' . ($errors->has('ubi_alm') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('ubi_alm', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            <div class="col-md-6">
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
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="{{ route('almacenes.index') }}" class="btn btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

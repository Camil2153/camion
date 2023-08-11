<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Código') }}
                    {{ Form::text('cod_cli', $cliente->cod_cli, ['class' => 'form-control' . ($errors->has('cod_cli') ? ' is-invalid' : ''),'maxlength' => '6', 'pattern' => '[0-9]{6}', 'placeholder' => '111111']) }}
                    {!! $errors->first('cod_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('nom_cli', $cliente->nom_cli, ['class' => 'form-control' . ($errors->has('nom_cli') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('nom_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Nombre Comercial') }}
                    {{ Form::text('nom_com_cli', $cliente->nom_com_cli, ['class' => 'form-control' . ($errors->has('nom_com_cli') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('nom_com_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Colonia') }}
                    {{ Form::text('col_cli', $cliente->col_cli, ['class' => 'form-control' . ($errors->has('col_cli') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('col_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Dirección') }}
                    {{ Form::text('dir_cli', $cliente->dir_cli, ['class' => 'form-control' . ($errors->has('dir_cli') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('dir_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('RFC') }}
                    {{ Form::text('rfc_cli', $cliente->rfc_cli, ['class' => 'form-control' . ($errors->has('rfc_cli') ? ' is-invalid' : ''),'maxlength' => '13']) }}
                    {!! $errors->first('rfc_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Ciudad') }}
                    {{ Form::text('ciu_cli', $cliente->ciu_cli, ['id' => 'ciu_cli', 'class' => 'form-control' . ($errors->has('ciu_cli') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('ciu_cli', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="  {{ route('clientes.index') }}" class="btn  btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>

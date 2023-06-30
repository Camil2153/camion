<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_doc_cam', $documentosCamione->cod_doc_cam, ['class' => 'form-control' . ($errors->has('cod_doc_cam') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_doc_cam', $documentosCamione->nom_doc_cam, ['class' => 'form-control' . ($errors->has('nom_doc_cam') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('est_doc_cam', ['Válido' => 'Válido', 'Vencido' => 'Vencido', 'No actualizado' => 'No actualizado'], $documentosCamione->est_doc_cam, ['class' => 'form-control' . ($errors->has('est_doc_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado']) }}
            {!! $errors->first('est_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia del Documento') }}
            {{ Form::date('vig_doc_cam', $documentosCamione->vig_doc_cam, ['class' => 'form-control' . ($errors->has('vig_doc_cam') ? ' is-invalid' : '')]) }}
            {!! $errors->first('vig_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_doc_cam', $camiones, $documentosCamione->cam_doc_cam, ['class' => 'form-control' . ($errors->has('cam_doc_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_doc_cam', $empresas, $documentosCamione->emp_doc_cam, ['class' => 'form-control' . ($errors->has('emp_doc_cam') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('documentos-camiones.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
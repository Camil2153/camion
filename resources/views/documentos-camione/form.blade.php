<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('cod_doc', $documentosCamione->cod_doc, ['class' => 'form-control' . ($errors->has('cod_doc') ? ' is-invalid' : ''), 'placeholder' => 'Cod Doc']) }}
            {!! $errors->first('cod_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nom_doc') }}
            {{ Form::text('nombre', $documentosCamione->nom_doc, ['class' => 'form-control' . ($errors->has('nom_doc') ? ' is-invalid' : ''), 'placeholder' => 'Nom Doc']) }}
            {!! $errors->first('nom_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('est_doc', $documentosCamione->est_doc, ['class' => 'form-control' . ($errors->has('est_doc') ? ' is-invalid' : ''), 'placeholder' => 'Est Doc']) }}
            {!! $errors->first('est_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia') }}
            {{ Form::text('vig_doc', $documentosCamione->vig_doc, ['class' => 'form-control' . ($errors->has('vig_doc') ? ' is-invalid' : ''), 'placeholder' => 'Vig Doc']) }}
            {!! $errors->first('vig_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_doc_cam', $camiones, $documentosCamione->cam_doc_cam, ['class' => 'form-control' . ($errors->has('cam_doc_cam') ? ' is-invalid' : ''), 'placeholder' => 'Cam Doc Cam']) }}
            {!! $errors->first('cam_doc_cam', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('documentos-camiones.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
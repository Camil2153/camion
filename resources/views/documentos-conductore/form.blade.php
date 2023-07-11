<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Número de Licencia') }}
            {{ Form::text('num_lic_doc_con', $documentosConductore->num_lic_doc_con, ['class' => 'form-control' . ($errors->has('num_lic_doc_con') ? ' is-invalid' : ''), 'pattern' => '[0-9]{10}', 'maxlength' => '10', 'placeholder' => 'inserte numero de licencia sin puntos ni comas']) }}
            {!! $errors->first('num_lic_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Vencimiento de Licencia') }}
            {{ Form::date('fec_ven_lic_doc_con', $documentosConductore->fec_ven_lic_doc_con, ['class' => 'form-control' . ($errors->has('fec_ven_lic_doc_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_ven_lic_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria de Licencia') }}
            {{ Form::select('cat_lic_doc_con', ['Licencia Federal Tipo E' => 'Licencia Federal Tipo E', 'Licencia Federal Tipo E1' => 'Licencia Federal Tipo E1', 'Licencia Federal Tipo E2' => 'Licencia Federal Tipo E2', 'Categoría C3' => 'Categoría C3'], $documentosConductore->cat_lic_doc_con, ['class' => 'form-control' . ($errors->has('cat_lic_doc_con') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una categoria']) }}
            {!! $errors->first('cat_lic_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EPS') }}
            {{ Form::text('eps_doc_con', $documentosConductore->eps_doc_con, ['class' => 'form-control' . ($errors->has('eps_doc_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('eps_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conductor') }}
            {{ Form::select('con_doc_con', $conductores, $documentosConductore->con_doc_con, ['class' => 'form-control' . ($errors->has('con_doc_con') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar conductor']) }}
            {!! $errors->first('con_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_doc_con', $empresas, $documentosConductore->emp_doc_con, ['class' => 'form-control' . ($errors->has('emp_doc_con') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_doc_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('documentos-conductores.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
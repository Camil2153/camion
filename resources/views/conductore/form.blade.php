<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('ced_con', $conductore->ced_con, ['class' => 'form-control' . ($errors->has('ced_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ced_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nom_con', $conductore->nom_con, ['class' => 'form-control' . ($errors->has('nom_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
  
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('dir_con', $conductore->dir_con, ['class' => 'form-control' . ($errors->has('dir_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dir_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('No. Telefono') }}
            {{ Form::text('num_tel_con', $conductore->num_tel_con, ['class' => 'form-control' . ($errors->has('num_tel_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('num_tel_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo electronico') }}
            {{ Form::text('cor_ele_con', $conductore->cor_ele_con, ['class' => 'form-control' . ($errors->has('cor_ele_con') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cor_ele_con', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('conductores.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>
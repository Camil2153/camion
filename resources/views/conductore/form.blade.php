<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('DNI') }}
                    {{ Form::text('dni_con', $conductore->dni_con, ['class' => 'form-control' . ($errors->has('dni_con') ? ' is-invalid' : ''), 'pattern' => '[0-9]{6, 10}', 'maxlength' => '10', 'placeholder' => 'inserte DNI sin puntos ni comas', 'oninput' => 'fillLicenseNumber(this.value)']) }}
                    {!! $errors->first('dni_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('nom_con', $conductore->nom_con, ['class' => 'form-control' . ($errors->has('nom_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('nom_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Número de licencia') }}
                    {{ Form::text('num_lic_con', $conductore->num_lic_con, ['class' => 'form-control' . ($errors->has('num_lic_con') ? ' is-invalid' : ''), 'id' => 'num_lic_con']) }}
                    {!! $errors->first('num_lic_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fecha de vencimiento licencia') }}
                    {{ Form::date('fec_ven_lic_con', $conductore->fec_ven_lic_con, ['class' => 'form-control' . ($errors->has('fec_ven_lic_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('fec_ven_lic_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fecha de contratación') }}
                    {{ Form::date('fec_con_con', $conductore->fec_con_con, ['class' => 'form-control' . ($errors->has('fec_con_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('fec_con_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    @if (Route::currentRouteName() === 'conductores.edit')
                    {{ Form::select('est_con', ['activo' => 'Activo', 'asignado' => 'Asignado', 'bloqueado' => 'Bloqueado'], $conductore->est_con, ['class' => 'form-control' . ($errors->has('est_con') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado', 'disabled' => 'disabled']) }}
                    @else
                    {{ Form::select('est_con', ['activo' => 'Activo', 'asignado' => 'Asignado', 'bloqueado' => 'Bloqueado'], 'activo', ['class' => 'form-control' . ($errors->has('est_con') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar estado', 'disabled' => 'disabled']) }}
                    @endif
                    {!! $errors->first('est_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('Fecha de nacimiento') }}
                    {{ Form::date('fec_nac_con', $conductore->fec_nac_con, ['class' => 'form-control' . ($errors->has('fec_nac_con') ? ' is-invalid' : ''), 'max' => date('Y-m-d')]) }}
                    {!! $errors->first('fec_nac_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Dirección') }}
                    {{ Form::text('dir_con', $conductore->dir_con, ['class' => 'form-control' . ($errors->has('dir_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('dir_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Número de teléfono') }}
                    {{ Form::text('num_tel_con', $conductore->num_tel_con, ['class' => 'form-control' . ($errors->has('num_tel_con') ? ' is-invalid' : ''), 'pattern' => '[0-9]{10}', 'maxlength' => '10']) }}
                    {!! $errors->first('num_tel_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Correo electrónico') }}
                    {{ Form::email('cor_ele_con', $conductore->cor_ele_con, ['class' => 'form-control' . ($errors->has('cor_ele_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('cor_ele_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Años de experiencia') }}
                    {{ Form::text('año_exp_con', $conductore->año_exp_con, ['class' => 'form-control' . ($errors->has('año_exp_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('año_exp_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('EPS') }}
                    {{ Form::text('eps_con', $conductore->eps_con, ['class' => 'form-control' . ($errors->has('eps_con') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('eps_con', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20 text-center">
        <button type="submit" class="btn btn-outline-success btn-sm custom-btn">{{ __('Guardar') }}</button>
        <a href="{{ route('conductores.index') }}" class="btn btn-outline-danger btn-sm custom-btn">Cancelar</a>
    </div>
</div>


<script>
    function fillLicenseNumber(dni) {
        document.getElementById('num_lic_con').value = dni;
    }
</script>
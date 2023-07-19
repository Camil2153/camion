<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('cod_ser', $servicio->cod_ser, ['class' => 'form-control' . ($errors->has('cod_ser') ? ' is-invalid' : ''), 'pattern' => '[0-9]{4}', 'maxlength' => '4', 'placeholder' => '1111']) }}
            {!! $errors->first('cod_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Servicio') }}
            {{ Form::select('tip_ser_ser', $tiposServicios, $servicio->tip_ser_ser, ['class' => 'form-control' . ($errors->has('tip_ser_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar tipo de servicio']) }}
            {!! $errors->first('tip_ser_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camion') }}
            {{ Form::select('cam_ser', $camiones, $servicio->cam_ser, ['class' => 'form-control' . ($errors->has('cam_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar camion']) }}
            {!! $errors->first('cam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('desc_ser', $servicio->desc_ser, ['class' => 'form-control' . ($errors->has('desc_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desc_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fec_ser', $servicio->fec_ser, ['class' => 'form-control' . ($errors->has('fec_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kilometraje') }}
            {{ Form::text('kil_ser', $servicio->kil_ser, ['class' => 'form-control' . ($errors->has('kil_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('kil_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ace_mot_ser', 'Se cambio el aceite del motor') }}
            {{ Form::hidden('ace_mot_ser', 0) }}
            {{ Form::checkbox('ace_mot_ser', 1, $servicio->ace_mot_ser, ['class' => 'form-check-input' . ($errors->has('ace_mot_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('ace_mot_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fil_ace_air_com_ser', 'Se reemplazaron los filtros de aceite, aire y combustible') }}
            {{ Form::hidden('fil_ace_air_com_ser', 0) }}
            {{ Form::checkbox('fil_ace_air_com_ser', 1, $servicio->fil_ace_air_com_ser, ['class' => 'form-check-input' . ($errors->has('fil_ace_air_com_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('fil_ace_air_com_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pas_fre_ser', 'Se ajustaron las pastillas de freno') }}
            {{ Form::hidden('pas_fre_ser', 0) }}
            {{ Form::checkbox('pas_fre_ser', 1, $servicio->pas_fre_ser, ['class' => 'form-check-input' . ($errors->has('pas_fre_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('pas_fre_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des_dis_tam_ser', 'Se verificó el desgaste de los discos y tambores') }}
            {{ Form::hidden('des_dis_tam_ser', 0) }}
            {{ Form::checkbox('des_dis_tam_ser', 1, $servicio->des_dis_tam_ser, ['class' => 'form-check-input' . ($errors->has('des_dis_tam_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('des_dis_tam_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('niv_cal_liq_fre_ser', 'Se comprobó el nivel y la calidad del líquido de frenos') }}
            {{ Form::hidden('niv_cal_liq_fre_ser', 0) }}
            {{ Form::checkbox('niv_cal_liq_fre_ser', 1, $servicio->niv_cal_liq_fre_ser, ['class' => 'form-check-input' . ($errors->has('niv_cal_liq_fre_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('niv_cal_liq_fre_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aju_lub_com_sus_ser', 'Se ajustaron y lubricaron los componentes de la suspensión') }}
            {{ Form::hidden('aju_lub_com_sus_ser', 0) }}
            {{ Form::checkbox('aju_lub_com_sus_ser', 1, $servicio->aju_lub_com_sus_ser, ['class' => 'form-check-input' . ($errors->has('aju_lub_com_sus_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('aju_lub_com_sus_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ali_rue_ser', 'Se alinearon las ruedas') }}
            {{ Form::hidden('ali_rue_ser', 0) }}
            {{ Form::checkbox('ali_rue_ser', 1, $servicio->ali_rue_ser, ['class' => 'form-check-input' . ($errors->has('ali_rue_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('ali_rue_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cre_dir_ser', 'Se ajustó la cremallera de dirección') }}
            {{ Form::hidden('cre_dir_ser', 0) }}
            {{ Form::checkbox('cre_dir_ser', 1, $servicio->cre_dir_ser, ['class' => 'form-check-input' . ($errors->has('cre_dir_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('cre_dir_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lub_com_nec_ser', 'Se lubricaron los componentes de la dirección') }}
            {{ Form::hidden('lub_com_nec_ser', 0) }}
            {{ Form::checkbox('lub_com_nec_ser', 1, $servicio->lub_com_nec_ser, ['class' => 'form-check-input' . ($errors->has('lub_com_nec_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('lub_com_nec_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exa_sis_esc_ser', 'Se examinó el sistema de escape') }}
            {{ Form::hidden('exa_sis_esc_ser', 0) }}
            {{ Form::checkbox('exa_sis_esc_ser', 1, $servicio->exa_sis_esc_ser, ['class' => 'form-check-input' . ($errors->has('exa_sis_esc_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('exa_sis_esc_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fun_luc_ser', 'Se verificó el funcionamiento de las luces') }}
            {{ Form::hidden('fun_luc_ser', 0) }}
            {{ Form::checkbox('fun_luc_ser', 1, $servicio->fun_luc_ser, ['class' => 'form-check-input' . ($errors->has('fun_luc_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('fun_luc_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ins_cab_ser', 'Se inspeccionó el cableado') }}
            {{ Form::hidden('ins_cab_ser', 0) }}
            {{ Form::checkbox('ins_cab_ser', 1, $servicio->ins_cab_ser, ['class' => 'form-check-input' . ($errors->has('ins_cab_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('ins_cab_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('con_ele_ser', 'Se revisaron los conectores eléctricos') }}
            {{ Form::hidden('con_ele_ser', 0) }}
            {{ Form::checkbox('con_ele_ser', 1, $servicio->con_ele_ser, ['class' => 'form-check-input' . ($errors->has('con_ele_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('con_ele_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rot_neu_ser', 'Se rotaron los neumáticos') }}
            {{ Form::hidden('rot_neu_ser', 0) }}
            {{ Form::checkbox('rot_neu_ser', 1, $servicio->rot_neu_ser, ['class' => 'form-check-input' . ($errors->has('rot_neu_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('rot_neu_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ree_neu_ser', 'Se reemplazaron los neumáticos') }}
            {{ Form::hidden('ree_neu_ser', 0) }}
            {{ Form::checkbox('ree_neu_ser', 1, $servicio->ree_neu_ser, ['class' => 'form-check-input' . ($errors->has('ree_neu_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('ree_neu_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('niv_cal_liq_ref_ser', 'Se verificó el nivel y la calidad del líquido refrigerante') }}
            {{ Form::hidden('niv_cal_liq_ref_ser', 0) }}
            {{ Form::checkbox('niv_cal_liq_ref_ser', 1, $servicio->niv_cal_liq_ref_ser, ['class' => 'form-check-input' . ($errors->has('niv_cal_liq_ref_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('niv_cal_liq_ref_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ins_rad_man_ser', 'Se inspeccionó el radiador y las mangueras') }}
            {{ Form::hidden('ins_rad_man_ser', 0) }}
            {{ Form::checkbox('ins_rad_man_ser', 1, $servicio->ins_rad_man_ser, ['class' => 'form-check-input' . ($errors->has('ins_rad_man_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('ins_rad_man_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('liq_tra_ser', 'Se cambió el líquido de la transmisión') }}
            {{ Form::hidden('liq_tra_ser', 0) }}
            {{ Form::checkbox('liq_tra_ser', 1, $servicio->liq_tra_ser, ['class' => 'form-check-input' . ($errors->has('liq_tra_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('liq_tra_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rev_emb_ser', 'Se revisó el embrague') }}
            {{ Form::hidden('rev_emb_ser', 0) }}
            {{ Form::checkbox('rev_emb_ser', 1, $servicio->rev_emb_ser, ['class' => 'form-check-input' . ($errors->has('rev_emb_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('rev_emb_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('niv_cal_liq_tra_ser', 'Se verificó el nivel y la calidad del líquido de la transmisión') }}
            {{ Form::hidden('niv_cal_liq_tra_ser', 0) }}
            {{ Form::checkbox('niv_cal_liq_tra_ser', 1, $servicio->niv_cal_liq_tra_ser, ['class' => 'form-check-input' . ($errors->has('niv_cal_liq_tra_ser') ? ' is-invalid' : ''), 'value' => 1, 'style' => 'margin-left: 10px']) }}
            {!! $errors->first('niv_cal_liq_tra_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo') }}
             <?php
              $cos_ser_formatted = number_format($servicio->cos_ser, 2, ',', '.');
             ?>
           {{ Form::text('cos_ser', $cos_ser_formatted, ['id' => 'cos_ser', 'class' => 'form-control' . ($errors->has('cos_ser') ? ' is-invalid' : ''), 'placeholder' => 'Inserte datos sin puntos ni comas']) }}
           {!! $errors->first('cos_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Responsable') }}
            {{ Form::text('res_ser', $servicio->res_ser, ['class' => 'form-control' . ($errors->has('res_ser') ? ' is-invalid' : '')]) }}
            {!! $errors->first('res_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Taller') }}
            {{ Form::select('tal_ser', $talleres, $servicio->tal_ser, ['class' => 'form-control' . ($errors->has('tal_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar taller']) }}
            {!! $errors->first('tal_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('emp_ser', $empresas, $servicio->emp_ser, ['class' => 'form-control' . ($errors->has('emp_ser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar empresa']) }}
            {!! $errors->first('emp_ser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-secundary border border-secondary btn-sm ">{{ __('Guardar') }}</button>
        <a href="  {{ route('servicios.index') }}" class="btn btn-secundary border border-secondary btn-sm ">Cancelar</a>
    </div>
</div>


<script>
    // Obtener el campo de input del costo
    var cosComInput = document.getElementById('cos_ser');

    // Escuchar el evento de entrada en el campo de input
    cosComInput.addEventListener('input', function(event) {
        // Obtener el valor sin separadores de miles
        var rawValue = event.target.value.replace(/\./g, '');

        // Formatear el valor con separadores de miles y decimales
        var formattedValue = addThousandSeparators(rawValue, 2);

        // Mostrar el valor formateado en el campo de input
        event.target.value = formattedValue;
    });

    // Función para agregar separadores de miles y decimales
    function addThousandSeparators(value, decimalPlaces) {
        var parts = value.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        var formattedValue = parts.join(".");
        
        if (decimalPlaces && parts.length > 1) {
            formattedValue += '.' + parts[1].slice(0, decimalPlaces);
        }

        return formattedValue;
    }

    // Escuchar el evento de envío del formulario
    cosComInput.closest('form').addEventListener('submit', function(event) {
        // Eliminar los separadores de miles antes de enviar el formulario
        var rawValue = cosComInput.value.replace(/\./g, '');
        cosComInput.value = rawValue;
    });
</script>
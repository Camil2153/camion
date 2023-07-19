<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->string('cod_ser', 4)->primary(); // codigo servicio
            $table->string('tip_ser_ser', 4); // tipo de servicio
            $table->string('cam_ser', 7); // camion al que se le realizo el servicio
            $table->string('desc_ser', 100); // descripcion servicio
            $table->date('fec_ser'); // fecha del servicio
            $table->integer('kil_ser'); // kilometraje registrado en el tractocamión en el momento del servicio de mantenimiento.
            $table->boolean('ace_mot_ser'); // cambio aceite de motor 
            $table->boolean('fil_ace_air_com_ser'); // reemplazo filtros de aceite, aire y combustible
            $table->boolean('pas_fre_ser'); // ajuste pastillas de freno
            $table->boolean('des_dis_tam_ser'); // verificacion desgaste de los discos y tambores
            $table->boolean('niv_cal_liq_fre_ser'); // comprobacion nivel y la calidad del líquido de frenos
            $table->boolean('aju_lub_com_sus_ser'); // ajuste y lubricacion de los componentes de la suspensión
            $table->boolean('ali_rue_ser'); // alineacion de las ruedas
            $table->boolean('cre_dir_ser'); // ajuste de la cremallera de dirección
            $table->boolean('lub_com_nec_ser'); // lubricación de los componentes necesarios.
            $table->boolean('exa_sis_esc_ser'); // examen sistema de escape
            $table->boolean('fun_luc_ser'); // verificacion funcionamiento de las luces
            $table->boolean('ins_cab_ser'); // inspeccion cableado 
            $table->boolean('con_ele_ser'); // revision conectores eléctricos 
            $table->boolean('rot_neu_ser'); // rotación neumáticos
            $table->boolean('ree_neu_ser'); // reemplazo neumáticos
            $table->boolean('niv_cal_liq_ref_ser'); // verificacion nivel y la calidad del líquido refrigerante
            $table->boolean('ins_rad_man_ser'); // inspeccion radiador y las mangueras
            $table->boolean('liq_tra_ser'); // cambio líquido de la transmisión (Si el tractocamión tiene una transmisión manual)
            $table->boolean('rev_emb_ser'); //  revision embrague (Si el tractocamión tiene una transmisión manual)
            $table->boolean('niv_cal_liq_tra_ser'); // verificacion nivel y la calidad del líquido de la transmisión (Si el tractocamión tiene una transmisión automatica)
            $table->decimal('cos_ser', 10, 2); // costo servicio
            $table->string('res_ser', 45); // responsable servicio
            $table->string('tal_ser', 15); // taller que brindo el servicio
            $table->string('emp_ser', 15);  // empresa servicio

            $table->foreign('tip_ser_ser')->references('cod_tip_ser')->on('tipos_servicios');    
            $table->foreign('cam_ser')->references('pla_cam')->on('camiones');  
            $table->foreign('tal_ser')->references('nit_tal')->on('talleres');
            $table->foreign('emp_ser')->references('nit_emp')->on('empresas');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
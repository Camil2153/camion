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
        Schema::create('fallas', function (Blueprint $table) {
            $table->string('cod_fal', 4)->primary(); // codigo falla
            $table->string('com_fal', 15)->nullable(); // componente a reemplazar o arreglar
            $table->string('desc_fal', 100); // descripcion falla
            $table->date('fec_fal'); // fecha falla
            $table->integer('kil_fal'); // kilometraje registrado en el tractocamión en el momento de la detección de la falla
            $table->string('tie_ina_fal', 20); // tiempo de inactividad por falla
            $table->string('gra_fal', 20); // gravedad falla
            $table->string('est_act_fal', 20); // estado actual de la falla
            $table->string('res_det_fal', 45); // responsable de deteccion falla
            $table->string('res_rep_fal', 45); // responsable reparacion falla
            $table->string('acc_fal', 100); // acciones que se tomaron frente a la falla
            $table->decimal('cos_fal', 10, 2); // costo de reparacion falla
            $table->string('sis_fal', 2); // sistema falla
            $table->string('cam_fal', 7); // camion falla
            $table->string('tal_fal', 15); // taller que se encargo de reparacion de falla
            $table->string('emp_fal', 15); // empresa falla

            $table->foreign('sis_fal')->references('cod_sis')->on('sistemas'); 
            $table->foreign('com_fal')->references('num_ser_com')->on('componentes');  
            $table->foreign('cam_fal')->references('pla_cam')->on('camiones');    
            $table->foreign('tal_fal')->references('nit_tal')->on('talleres');
            $table->foreign('emp_fal')->references('nit_emp')->on('empresas');            
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
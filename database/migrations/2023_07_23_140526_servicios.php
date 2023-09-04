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
            $table->string('cod_ser', 7)->primary(); // codigo servicio
            $table->date('fec_ser'); // fecha de servicio
            $table->string('sis_ser', 2); // sistema servicio
            $table->string('act_ser', 2); // actividad servicio
            $table->string('est_ser', 20); // estado servicio
            $table->string('tip_ser', 20); // tipo servicio
            $table->string('fal_ser', 4)->nullable(); // tipo servicio
            $table->string('det_ser', 500); // detalles servicio
            $table->string('cam_ser', 7); // camion servicio
            $table->string('tal_ser', 15)->nullable();
            $table->string('res_ser', 45); // responsable servicio
            $table->string('tip_int_ser'); // tipo de intervalo tiempo/kilometraje recomendado para realizar el mantenimiento
            $table->integer('int_ser'); // intervalo de tiempo/kilometraje recomendado para realizar el mantenimiento
            $table->integer('int_ale_ser'); // intervalo dias/kilometros previos para mostrar la alerta
            $table->string('ale_ser', 500); // alerta servicio
            $table->integer('cos_ser'); // costo servicio
            $table->string('alm_ser', 4)->nullable(); // almacen servicio
            $table->bigInteger('can_ser')->nullable(); // cantidad almacen servicio

            $table->foreign('sis_ser')->references('cod_sis')->on('sistemas');  
            $table->foreign('act_ser')->references('cod_act')->on('actividades');
            $table->foreign('fal_ser')->references('cod_fal')->on('fallas'); 
            $table->foreign('tal_ser')->references('nit_tal')->on('talleres');  
            $table->foreign('cam_ser')->references('pla_cam')->on('camiones');  
            $table->foreign('alm_ser')->references('cod_alm')->on('almacenes');            
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

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
            $table->string('desc_fal', 500); // descripcion falla
            $table->date('fec_fal'); // fecha falla
            $table->integer('kil_fal'); // kilometraje registrado en el tractocamión en el momento de la detección de la falla
            $table->string('gra_fal', 20); // gravedad falla
            $table->string('est_act_fal', 20); // estado actual de la falla
            $table->string('res_det_fal', 45); // responsable de deteccion falla
            $table->string('sis_fal', 2); // sistema falla
            $table->string('cam_fal', 7); // camion falla
            $table->string('rut_fal', 4);
 
            $table->foreign('sis_fal')->references('cod_sis')->on('sistemas');   
            $table->foreign('cam_fal')->references('pla_cam')->on('camiones');   
            $table->foreign('rut_fal')->references('cod_rut')->on('rutas');             
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
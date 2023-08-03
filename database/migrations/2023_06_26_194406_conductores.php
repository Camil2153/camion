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
        Schema::create('conductores', function (Blueprint $table) {
            $table->string('dni_con', 20)->primary(); // dni conductor
            $table->string('nom_con', 45); // nombre conductor
            $table->string('num_lic_con', 20); // numero de licencia conductor
            $table->date('fec_ven_lic_con'); // fecha de vencimiento licencia conductor
            $table->date('fec_con_con'); // fecha de contratacion conductor
            $table->string('est_con', 20); // estado conductor
            $table->date('fec_nac_con'); // fecha nacimiento conductor
            $table->string('dir_con', 35); // direccion conductor
            $table->string('num_tel_con', 10); // numero telefono conductor
            $table->string('cor_ele_con', 45); // correo electronico conductor
            $table->integer('año_exp_con'); // años de experiencia conductor  
            $table->string('eps_con', 20); // eps conductor
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
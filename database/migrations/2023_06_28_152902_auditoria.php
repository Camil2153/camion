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
        Schema::create('auditoria', function (Blueprint $table) {
            $table->string('cod_aud', 5)->primary(); // codigo auditoria
            $table->string('ced_usu', 20); // cedula de usuario
            $table->date('fec_ing'); // fecha de ingreso
            $table->time('hor_ing'); // hora de ingreso
            $table->string('acc_aud', 20); // accion realizada 
            $table->string('tab_aud', 20); // tabla gestionada
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
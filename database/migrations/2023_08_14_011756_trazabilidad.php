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
        Schema::create('trazabilidad', function (Blueprint $table) {
            $table->bigInteger('cod_tra')->primary(); // codigo trazabilidad
            $table->date('dat_pro_tra')->nullable(); // fecha trazabilidad programado
            $table->time('tim_pro_tra')->nullable(); // hora trazabilidad programado
            $table->date('dat_enp_tra')->nullable(); // fecha trazabilidad en progreso
            $table->time('tim_enp_tra')->nullable(); // hora trazabilidad en progreso
            $table->date('dat_com_tra')->nullable(); // fecha trazabilidad completado
            $table->time('tim_com_tra')->nullable(); // hora trazabilidad completado
            $table->date('dat_can_tra')->nullable(); // fecha trazabilidad cancelado
            $table->time('tim_can_tra')->nullable(); // hora trazabilidad cancelado

            $table->string('via_tra', 4); // viaje trazabilidad
 
            $table->foreign('via_tra')->references('cod_via')->on('viajes');
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

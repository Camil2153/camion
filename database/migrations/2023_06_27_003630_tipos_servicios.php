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
        Schema::create('tipos_servicios', function (Blueprint $table) {
            $table->string('cod_tip_ser', 4)->primary(); // codigo tipo de servicio
            $table->string('nom_tip_ser', 15); // nombre tipo de servicio
            $table->string('desc_tip_ser', 100); // descripcion tipo de servicio
            $table->integer('int_tie_tip_ser'); // intervalo de tiempo recomendado o programado en dias para realizar ese tipo de servicio de mantenimiento
            $table->integer('int_kil_tip_ser'); // intervalo de kilometraje recomendado o programado para realizar ese tipo de servicio de mantenimiento
            $table->string('emp_tip_ser', 15); // empresa tipo de servicio
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_tip_ser')->references('nit_emp')->on('empresas');
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
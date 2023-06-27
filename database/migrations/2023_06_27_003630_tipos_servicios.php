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
            $table->string('cod_tip_ser', 4)->primary();
            $table->string('nom_tip_ser', 15);
            $table->string('desc_tip_ser', 100);
            $table->string('int_tie_tip_ser', 20);
            $table->integer('int_kil_tip_ser');
            $table->string('emp_tip_ser', 15); // Corregido: usar tipo de dato string
        
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

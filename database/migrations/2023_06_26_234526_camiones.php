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
        Schema::create('camiones', function (Blueprint $table) {
            $table->string('pla_cam', 7)->primary();
            $table->string('mar_cam', 15);
            $table->string('mod_cam', 4);
            $table->string('tip_cam', 10);
            $table->string('est_cam', 10);
            $table->integer('kil_cam');
            $table->integer('cap_cam');
            $table->integer('cont_cam');
            $table->string('con_cam', 20); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('con_cam')->references('dni_con')->on('conductores');
            $table->string('emp_cam', 15); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_cam')->references('nit_emp')->on('empresas');
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

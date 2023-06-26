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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cod_cli', 6)->primary();
            $table->string('nom_cli', 25);
            $table->string('nom_com_cli', 25);
            $table->string('col_cli', 35);
            $table->string('dir_cli', 35);
            $table->string('rfc_cli', 15);
            $table->string('ciu_cli', 3); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('ciu_cli')->references('cod_ciu')->on('ciudades');
            $table->string('emp_cli', 15); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_cli')->references('nit_emp')->on('empresas');
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

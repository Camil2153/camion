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
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('nit_emp', 15)->primary();
            $table->string('nom_emp', 45);
            $table->string('dir_emp', 45);
            $table->string('pai_emp', 2); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('pai_emp')->references('cod_pai')->on('paises');
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
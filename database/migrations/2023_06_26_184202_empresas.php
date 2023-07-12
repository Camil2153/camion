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
            $table->string('nit_emp', 10)->primary(); // nit empresa
            $table->string('nom_emp', 45); // nombre empresa
            $table->string('dir_emp', 45); // direccion empresa
            $table->string('pai_emp', 2); // pais empresa
        
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
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
        Schema::create('rutas', function (Blueprint $table) {
            $table->string('cod_rut')->primary();
            $table->string('nom_rut');
            $table->unsignedInteger('ori_rut')->length(4); // Primera columna de clave foránea

            // Definición de la relación con la tabla de ciudades para la primera columna
            $table->foreign('ori_rut')->references('cod_ciu')->on('ciudades');
            
            $table->unsignedInteger('des_rut')->length(4); // Segunda columna de clave foránea
            
            // Definición de la relación con la tabla de ciudades para la segunda columna
            $table->foreign('des_rut')->references('cod_ciu')->on('ciudades');            

            $table->string('dis_rut');
            $table->string('dur_rut');
            $table->string('res_rut');
            $table->string('com_rut');
            $table->string('est_rut');
        
            $table->timestamps();
        });        
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
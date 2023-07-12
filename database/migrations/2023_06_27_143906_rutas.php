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
            $table->string('cod_rut', 4)->primary(); // codigo ruta
            $table->string('nom_rut', 25); // nombre ruta
            $table->string('ori_rut', 3); // ciudad de origen de la ruta

            // Definición de la relación con la tabla de ciudades para la primera columna
            $table->foreign('ori_rut')->references('cod_ciu')->on('ciudades');

            $table->string('des_rut', 3); // ciudad de destino de la ruta

            // Definición de la relación con la tabla de ciudades para la segunda columna
            $table->foreign('des_rut')->references('cod_ciu')->on('ciudades');            

            $table->string('dis_rut', 15); // distancia ruta
            $table->string('dur_rut', 15); // duracion ruta
            $table->string('res_rut', 100); // restricciones ruta
            $table->string('com_rut', 25); // complejidad ruta
            $table->string('est_rut', 25); // estado ruta
            $table->string('emp_rut', 15); // empresa ruta
            
            // Definición de la relación con la tabla de empresas para la tercera columna
            $table->foreign('emp_rut')->references('nit_emp')->on('empresas'); 

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
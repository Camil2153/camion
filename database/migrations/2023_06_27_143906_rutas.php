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
            $table->string('cod_rut', 4)->primary();
            $table->string('nom_rut', 25);
            $table->string('ori_rut', 3); // Primera columna de clave foránea

            // Definición de la relación con la tabla de ciudades para la primera columna
            $table->foreign('ori_rut')->references('cod_ciu')->on('ciudades');

            $table->string('des_rut', 3); // Segunda columna de clave foránea

            // Definición de la relación con la tabla de ciudades para la segunda columna
            $table->foreign('des_rut')->references('cod_ciu')->on('ciudades');            

            $table->string('dis_rut', 15);
            $table->string('dur_rut', 15);
            $table->string('res_rut', 100);
            $table->string('com_rut', 25);
            $table->string('est_rut', 25);
            $table->string('emp_rut', 15); // Tercera columna de clave foránea

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

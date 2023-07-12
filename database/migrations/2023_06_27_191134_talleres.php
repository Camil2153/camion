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
        Schema::create('talleres', function (Blueprint $table) {
            $table->string('nit_tal', 15)->primary(); // nit taller
            $table->string('nom_tal', 45); // nombre taller
            $table->string('dir_tal', 35); // direccion taller
            $table->string('ser_tal', 45); // servicio taller
            $table->string('hor_tal', 45); // horario de atencion taller
            $table->string('num_con_tal', 10); // numero de contacto taller
            $table->string('rut_tal', 4); // ruta taller

            // Definición de la relación con la tabla de ciudades para la segunda columna
            $table->foreign('rut_tal')->references('cod_rut')->on('rutas');            

            $table->string('emp_tal', 15); // empresa del taller

            // Definición de la relación con la tabla de empresas para la tercera columna
            $table->foreign('emp_tal')->references('nit_emp')->on('empresas'); 

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
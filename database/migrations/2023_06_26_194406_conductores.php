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
        Schema::create('conductores', function (Blueprint $table) {
            $table->string('dni_con', 20)->primary(); // dni conductor
            $table->string('nom_con', 45); // nombre conductor
            $table->date('fec_nac_con'); // fecha nacimiento conductor
            $table->string('dir_con', 35); // direccion conductor
            $table->string('num_tel_con', 10); // numero telefono conductor
            $table->string('cor_ele_con', 45); // correo electronico conductor
            $table->string('emp_con', 15); // empresa conductor
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_con')->references('nit_emp')->on('empresas');
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
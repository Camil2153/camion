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
            $table->string('pla_cam', 7)->primary(); // placa camion
            $table->string('mar_cam', 15); // marca camion
            $table->string('mod_cam', 4); // modelo camion
            $table->string('tip_cam', 20); // tipo camion
            $table->string('est_cam', 20); // estado camion
            $table->integer('kil_cam'); // kilometraje actual del camion
            $table->float('cap_cam'); // capacidad en toneladas del camion
            $table->float('cont_cam'); // promedio de consumo de combustible en litros por kilometro 
            $table->string('con_cam', 20); // conductor camion
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('con_cam')->references('dni_con')->on('conductores');
            $table->string('emp_cam', 15); // empresa camion
        
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
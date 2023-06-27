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
        Schema::create('almacenes', function (Blueprint $table) {
            $table->string('cod_alm', 4)->primary();
            $table->string('com_alm', 15); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('com_alm')->references('num_ser_com')->on('componentes');
            $table->string('cat_alm', 25);
            $table->string('can_alm', 10);
            $table->string('ubi_alm', 15);
            $table->string('pro_alm', 15);
            $table->date('fec_adq_alm');
            $table->date('fec_ven_alm');
            $table->string('est_alm', 20);
            $table->string('emp_alm', 15); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_alm')->references('nit_emp')->on('empresas');
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

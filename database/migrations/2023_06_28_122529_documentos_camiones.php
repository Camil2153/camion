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
        Schema::create('documentos_camiones', function (Blueprint $table) {
            $table->string('cod_doc_cam', 4)->primary();
            $table->string('nom_doc_cam', 45);
            $table->string('est_doc_cam', 20);
            $table->date('vig_doc_cam');
            $table->string('cam_doc_cam', 7); 

            $table->foreign('cam_doc_cam')->references('pla_cam')->on('camiones');
            $table->string('emp_doc_cam', 15); // Corregido: usar tipo de dato string
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_doc_cam')->references('nit_emp')->on('empresas');
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

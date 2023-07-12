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
        Schema::create('documentos_conductores', function (Blueprint $table) {
            $table->string('num_lic_doc_con', 20)->primary(); // numero de licencia documento conductor
            $table->date('fec_ven_lic_doc_con'); // fecha de vencimiento documento conductor
            $table->string('cat_lic_doc_con', 30); // categoria documento conductor
            $table->string('eps_doc_con', 20); // eps documento conductor
            $table->string('con_doc_con', 20); // conductor documento conductor
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('con_doc_con')->references('dni_con')->on('conductores');
            $table->string('emp_doc_con', 15); // empresa documento conductor
        
            // Definición de la relación con la tabla de paises para la columna pai_emp
            $table->foreign('emp_doc_con')->references('nit_emp')->on('empresas');
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
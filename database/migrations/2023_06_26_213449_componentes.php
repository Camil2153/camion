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
        Schema::create('componentes', function (Blueprint $table) {
            $table->string('num_ser_com', 15)->primary(); // numero serie componente
            $table->string('nom_com', 25); // nombre componente
            $table->string('mar_com', 15); // marca componente
            $table->string('desc_com', 500); // descripcion componente
            $table->decimal('cos_com', 10, 2); // costo componente
            $table->string('sis_com', 2); // sistema componente
        
            $table->foreign('sis_com')->references('cod_sis')->on('sistemas');
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
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
        Schema::create('gastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fec_gas');
            $table->string('mon_gas');
            $table->string('des_gas');
            $table->unsignedBigInteger('categoriagastos_id'); // Columna de clave foránea
    
            // Definición de la relación con la tabla de categorías
            $table->foreign('categoriagastos_id')->references('id')->on('categoriagastos');
    
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

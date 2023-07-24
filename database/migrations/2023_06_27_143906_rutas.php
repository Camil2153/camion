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
            $table->string('ori_rut', 40); // ciudad de origen de la ruta
            $table->string('des_rut', 40); // ciudad de destino de la ruta
            $table->string('dis_rut', 15); // distancia ruta
            $table->string('dur_rut', 30); // duracion ruta
            $table->string('est_rut', 25); // estado ruta
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
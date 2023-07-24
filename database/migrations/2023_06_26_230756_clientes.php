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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cod_cli', 6)->primary(); // codigo cliente
            $table->string('nom_cli', 25); // nombre cliente
            $table->string('nom_com_cli', 25); // nombre comercial cliente
            $table->string('col_cli', 35); // colonia cliente
            $table->string('dir_cli', 35); // direccion cliente
            $table->string('rfc_cli', 15); // rfc cliente
            $table->string('ciu_cli', 40); // ciudad cliente
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
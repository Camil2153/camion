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
        Schema::create('categorias_gastos', function (Blueprint $table) {
            $table->string('cod_cat_gas', 4)->primary(); // codigo categoria gasto
            $table->string('nom_cat_gas', 25); // nombre categoria gasto
            $table->string('desc_cat_gas', 100); // descripcion categoria gasto
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
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
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('nit_emp', 10)->primary(); // nit empresa
            $table->string('nom_emp', 45); // nombre empresa
            $table->string('pai_emp', 45); // pais empresa
            $table->string('reg_emp', 45); // region empresa
            $table->string('cod_pos_emp', 45); // codigo postal empresa
            $table->string('dir_emp', 45); // direccion empresa
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

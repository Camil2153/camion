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
        Schema::create('actividades', function (Blueprint $table) {
            $table->string('cod_act', 2)->primary(); // codigo sistema
            $table->string('nom_act', 500); //nombre sistema
            $table->string('act_sis', 2); //nombre sistema

            $table->foreign('act_sis')->references('cod_sis')->on('sistemas');    
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

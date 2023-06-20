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
        //
        Schema::create('tiposervicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_tip_ser');
            $table->string('des_tip_ser');
            $table->string('int_tie_tip_ser');
            $table->string('int_kil_tip_ser');
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

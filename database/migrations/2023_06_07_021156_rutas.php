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
            $table->string('nom_rut')->primary();
            $table->String('ori_rut');
            $table->String('des_rut');
            $table->String('dis_rut');
            $table->String('dur_est_rut');
            $table->String('desc_rut');
            $table->String('cos_rut');
            $table->String('com_rut');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

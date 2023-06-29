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
        Schema::create('documentos_camiones', function (Blueprint $table) {
            $table->string('cod_doc', 3)->primary();
            $table->string('nom_doc', 10);
            $table->string('est_doc', 10);
            $table->date('vig_doc');
            $table->string('cam_doc_cam', 7); 

            $table->foreign('cam_doc_cam')->references('pla_cam')->on('camiones');
            
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

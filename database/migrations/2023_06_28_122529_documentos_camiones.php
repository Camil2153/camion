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
            $table->string('cod_doc_cam', 4)->primary(); // codigo documento camion
            $table->string('nom_doc_cam', 45); // nombre documento camion
            $table->string('est_doc_cam', 20); // estado documento camion
            $table->date('vig_doc_cam'); // vigencia documento camion
            $table->string('cam_doc_cam', 7); // camion documento camion

            $table->foreign('cam_doc_cam')->references('pla_cam')->on('camiones');
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
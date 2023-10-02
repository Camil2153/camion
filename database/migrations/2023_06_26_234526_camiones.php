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
        Schema::create('camiones', function (Blueprint $table) {
            $table->string('pla_cam', 7)->primary(); // placa camion
            $table->string('mar_cam', 15); // marca camion
            $table->string('mod_cam', 4); // modelo camion
            $table->string('tip_cam', 20); // tipo camion
            $table->integer('num_eje_cam'); // numero de ejes camion
            $table->string('est_cam', 20); // estado camion
            $table->integer('kil_cam'); // kilometraje actual del camion
            $table->integer('cap_cam'); // capacidad en toneladas del camion
            $table->string('con_cam', 20); // conductor camion
            $table->string('est_cam_anterior', 20)->nullable(); // estado camion anterior
        
            $table->foreign('con_cam')->references('dni_con')->on('conductores');
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
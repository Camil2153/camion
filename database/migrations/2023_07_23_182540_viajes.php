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
        Schema::create('viajes', function (Blueprint $table) {
            $table->string('cod_via', 4)->primary(); // codigo viaje
            $table->string('car_via', 25); // carga viaje
            $table->integer('pes_via'); // peso de la carga viaje
            $table->string('est_via', 20); // estado viaje
            $table->date('fec_sal_via'); // fecha de salida viaje
            $table->time('hor_sal_via'); // hora de salida viaje
            $table->date('fec_lle_via'); // fecha de llegada viaje
            $table->time('hor_lle_via'); // hora de llegada viaje
            $table->string('cam_via', 7); // camion viaje
            $table->string('cli_via', 6); // cliente viaje
            $table->string('rut_via', 4); // ruta viaje
            $table->string('emp_via', 10); // empresa viaje

            $table->foreign('cam_via')->references('pla_cam')->on('camiones');    
            $table->foreign('cli_via')->references('cod_cli')->on('clientes');  
            $table->foreign('rut_via')->references('cod_rut')->on('rutas');  
            $table->foreign('emp_via')->references('nit_emp')->on('empresas');        
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

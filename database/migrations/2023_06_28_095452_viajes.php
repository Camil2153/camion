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
            $table->string('cod_via', 4)->primary();
            $table->string('car_via', 25);
            $table->integer('pes_via');
            $table->string('est_via', 20);
            $table->date('fec_sal_via');
            $table->time('hor_sal_via');
            $table->date('fec_lle_via');
            $table->time('hor_lle_via');
            $table->integer('kil_via');
            $table->integer('com_via');
            $table->string('cam_via', 7);
            $table->string('cli_via', 6); 
            $table->string('rut_via', 4);
            $table->string('emp_via', 15); 

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

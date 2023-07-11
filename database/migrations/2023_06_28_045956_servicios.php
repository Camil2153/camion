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
        Schema::create('servicios', function (Blueprint $table) {
            $table->string('cod_ser', 4)->primary();
            $table->string('tip_ser_ser', 4);
            $table->string('cam_ser', 7);
            $table->string('desc_ser', 100);
            $table->date('fec_ser');
            $table->integer('kil_ser');
            $table->decimal('cos_ser', 10, 2);
            $table->string('res_ser', 45);
            $table->string('tal_ser', 15); 
            $table->string('emp_ser', 15); 

            $table->foreign('tip_ser_ser')->references('cod_tip_ser')->on('tipos_servicios');    
            $table->foreign('cam_ser')->references('pla_cam')->on('camiones');  
            $table->foreign('tal_ser')->references('nit_tal')->on('talleres');
            $table->foreign('emp_ser')->references('nit_emp')->on('empresas');            
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

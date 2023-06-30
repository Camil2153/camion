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
        Schema::create('fallas', function (Blueprint $table) {
            $table->string('cod_fal', 4)->primary();
            $table->string('com_fal', 15)->nullable();
            $table->string('desc_fal', 100); 
            $table->date('fec_fal');
            $table->integer('kil_fal');
            $table->string('tie_ina_fal', 20);
            $table->string('gra_fal', 20);
            $table->string('est_act_fal', 20); 
            $table->string('res_det_fal', 20);
            $table->string('res_rep_fal', 20);
            $table->string('acc_fal', 100);
            $table->decimal('cos_fal', 10, 2);
            $table->string('cam_fal', 7);
            $table->string('tal_fal', 15);
            $table->string('emp_fal', 15); 

            $table->foreign('com_fal')->references('num_ser_com')->on('componentes');  
            $table->foreign('cam_fal')->references('pla_cam')->on('camiones');    
            $table->foreign('tal_fal')->references('nit_tal')->on('talleres');
            $table->foreign('emp_fal')->references('nit_emp')->on('empresas');            
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

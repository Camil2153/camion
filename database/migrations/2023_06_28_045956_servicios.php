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
            $table->string('cod_ser', 4)->primary(); // codigo servicio
            $table->string('tip_ser_ser', 4); // tipo de servicio
            $table->string('cam_ser', 7); // camion al que se le realizo el servicio
            $table->string('desc_ser', 100); // descripcion servicio
            $table->date('fec_ser'); // fecha del servicio
            $table->integer('kil_ser'); // kilometraje registrado en el tractocamión en el momento del servicio de mantenimiento.
            $table->decimal('cos_ser', 10, 2); // costo servicio
            $table->string('res_ser', 45); // responsable servicio
            $table->string('tal_ser', 15); // taller que brindo el servicio
            $table->string('emp_ser', 15);  // empresa servicio

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
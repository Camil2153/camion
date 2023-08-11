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
        Schema::create('almacenes', function (Blueprint $table) {
            $table->string('cod_alm', 4)->primary(); // codigo almacen
            $table->string('com_alm', 15); // componente del almacen
            $table->string('cat_alm', 25); // categoria del componente en el almacen
            $table->bigInteger('can_alm'); // cantidad existente en el almacen
            $table->string('ubi_alm', 15); // ubicacion fisica del componente en el almacen
            $table->string('pro_alm', 30); // proveedor del componente
            $table->date('fec_adq_alm'); // fecha de adquisición del componente
            $table->date('fec_ven_alm'); // fecha de vencimiento del componente
            $table->string('est_alm', 20); // estado del componente dentro del almacen

            $table->foreign('com_alm')->references('num_ser_com')->on('componentes');
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
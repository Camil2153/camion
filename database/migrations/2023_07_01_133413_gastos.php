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
        Schema::create('gastos', function (Blueprint $table) {
            $table->string('cod_gas', 4)->primary(); // codigo gasto
            $table->decimal('mon_gas', 10, 2); // monto gasto
            $table->date('fec_gas'); // fecha gasto
            $table->string('cat_gas', 4); // categoria gasto

            // Definición de la relación con la tabla de ciudades para la primera columna
            $table->foreign('cat_gas')->references('cod_cat_gas')->on('categorias_gastos');           

            $table->string('via_gas', 4); // viaje gasto

            // Definición de la relación con la tabla de empresas para la segunda columna
            $table->foreign('via_gas')->references('cod_via')->on('viajes'); 

            $table->string('emp_gas', 15); // empresa gasto
            
            // Definición de la relación con la tabla de empresas para la tercera columna
            $table->foreign('emp_gas')->references('nit_emp')->on('empresas');

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
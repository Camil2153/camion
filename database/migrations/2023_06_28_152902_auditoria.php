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
        Schema::create('auditoria', function (Blueprint $table) {
            $table->string('cod_aud', 5)->primary();
            $table->string('ced_usu', 10);
            $table->date('fec_ing');
            $table->time('hor_ing');
            $table->string('acc_aud', 20); 
            $table->string('tab_aud', 20);
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

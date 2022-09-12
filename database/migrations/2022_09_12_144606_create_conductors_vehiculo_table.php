<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductors_vehiculo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_conductor');
            $table->unsignedBigInteger('id_vehiculo');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductors_vehiculo');
    }
};

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
        Schema::table('conductors_vehiculo', function (Blueprint $table) {
            //$table->unsignedBigInteger('id_conductor');
            //$table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_conductor')->references('id')->on('conductors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_pago");
            $table->unsignedBigInteger('fk_titular_id');
            $table->foreign('fk_titular_id')->references('id')->on('titulares');
            $table->unsignedBigInteger('fk_lote_id');
            $table->foreign('fk_lote_id')->references('id')->on('lotes');
            $table->integer('cantidad');
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
        Schema::dropIfExists('table_pagos');
    }
}

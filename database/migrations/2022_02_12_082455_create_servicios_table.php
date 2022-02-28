<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_servicio");
            $table->unsignedBigInteger('fk_tipo_servicio_id');
            $table->foreign('fk_tipo_servicio_id')->references('id')->on('tipos_servicios');
            $table->unsignedBigInteger('fk_finado_id');
            $table->foreign('fk_finado_id')->references('id')->on('finados');
            $table->string("solicitante_nombre", 50);
            $table->string("solicitante_apellido_paterno", 50);
            $table->string("solicitante_apellido_materno", 50);
            $table->string("telefono");
            $table->unsignedBigInteger('fk_funeraria_id');
            $table->foreign('fk_funeraria_id')->references('id')->on('funerarias');
            $table->unsignedBigInteger('fk_lote_id_actual');
            $table->foreign('fk_lote_id_actual')->references('id')->on('lotes');
            $table->unsignedBigInteger('fk_lote_id_reihumacion')->nullable($value = true);
            $table->foreign('fk_lote_id_reihumacion')->references('id')->on('lotes');
            $table->integer('libro');
            //$table->foreign('fk_libro_id')->references('id')->on('libros');
            $table->integer("hoja");
            $table->integer('memorandum');
            //$table->foreign('fk_memorandum_id')->references('id')->on('memorandums');
            $table->string("observaciones", 50);
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
        Schema::dropIfExists('exhumaciones');
    }
}

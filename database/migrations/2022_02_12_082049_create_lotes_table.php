<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_titular_id')->nullable($value = true);
            $table->foreign('fk_titular_id')->references('id')->on('titulares');
            $table->date("fecha_refrendo");
            $table->unsignedBigInteger('fk_seccion_id');
            $table->foreign('fk_seccion_id')->references('id')->on('secciones');
            $table->unsignedBigInteger('fk_area_id');
            $table->foreign('fk_area_id')->references('id')->on('areas');
            $table->integer('numero_concepcion');
            $table->unsignedBigInteger('fk_concepcion_id');
            $table->foreign('fk_concepcion_id')->references('id')->on('concepciones');
            $table->string('estatus', 50);
            $table->string("colindancia_norte");
            $table->float("medida_norte");
            $table->string("colindancia_sur");
            $table->float("medida_sur");
            $table->string("colindancia_oriente");
            $table->float("medida_oriente");
            $table->string("colindancia_poniente");
            $table->float("medida_poniente");
            $table->float("medida_total");
            $table->string("geoubicacion", 50);
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
        Schema::dropIfExists('lotes');
    }
}

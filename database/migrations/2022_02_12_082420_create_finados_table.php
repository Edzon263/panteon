<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 50);
            $table->string("apellido_paterno", 50);
            $table->string("apellido_materno", 50);
            $table->date("fecha_nacimiento");
            $table->string("sexo", 50);
            $table->string("causa_muerte", 50);
            $table->unsignedBigInteger('fk_clasificacion_id');
            $table->foreign('fk_clasificacion_id')->references('id')->on('clasificaciones');
            $table->unsignedBigInteger('fk_titular_id');
            $table->foreign('fk_titular_id')->references('id')->on('titulares');
            $table->unsignedBigInteger('fk_lotes_id');
            $table->foreign('fk_lotes_id')->references('id')->on('lotes');
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
        Schema::dropIfExists('finados');
    }
}

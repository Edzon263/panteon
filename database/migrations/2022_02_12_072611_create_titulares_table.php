<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulares', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 50);
            $table->string("apellido_paterno", 50);
            $table->string("apellido_materno", 50);
            $table->string("calle", 50);
            $table->integer("numero");
            $table->string("colonia", 50);
            $table->integer("codigo_postal");
            $table->string("municipio", 50);
            $table->string("telefono");
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
        Schema::dropIfExists('titulares');
    }
}

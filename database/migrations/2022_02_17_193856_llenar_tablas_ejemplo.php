<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LlenarTablasEjemplo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('tipos_servicios')->insert([
          ['id' => 1, 'tipo' => 'Inhumacion'],
          ['id' => 2, 'tipo' => 'Exhumacion'],
          ['id' => 3, 'tipo' => 'Deposito de cenizas'],
        ]);

        DB::table('secciones')->insert([
          ['id' => 1, 'seccion' => 'seccion 1'],
          ['id' => 2, 'seccion' => 'seccion 2'],
          ['id' => 3, 'seccion' => 'seccion 3'],
        ]);

        DB::table('concepciones')->insert([
          ['id' => 1, 'concepcion' => 'concepcion 1'],
          ['id' => 2, 'concepcion' => 'concepcion 2'],
          ['id' => 3, 'concepcion' => 'concepcion 3'],
        ]);

        DB::table('clasificaciones')->insert([
          ['id' => 1, 'clasificacion' => 'clasificacion 1'],
          ['id' => 2, 'clasificacion' => 'clasificacion 2'],
          ['id' => 3, 'clasificacion' => 'clasificacion 3'],
        ]);

        DB::table('funerarias')->insert([
          ['id' => 1, 'nombre' => 'fun 1', 'telefono' => 12345, 'direccion' => 'direccion 1'],
          ['id' => 2, 'nombre' => 'fun 2', 'telefono' => 12345, 'direccion' => 'direccion 2'],
          ['id' => 3, 'nombre' => 'fun 3', 'telefono' => 12345, 'direccion' => 'direccion 3'],
          ['id' => 4, 'nombre' => 'fun 4', 'telefono' => 12345, 'direccion' => 'direccion 4'],
        ]);

        DB::table('areas')->insert([
          ['id' => 1, 'nombre' => 'area 1'],
          ['id' => 2, 'nombre' => 'area 2'],
          ['id' => 3, 'nombre' => 'area 3'],
        ]);
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
}

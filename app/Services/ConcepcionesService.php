<?php
namespace App\Services;

use App\Concepciones;

class ConcepcionesService{

  public function get(){
    $concepciones =  Concepciones::get();
    $concepcionessArray[""] = "Seleccione una concepcion";
    foreach ($concepciones as $concepcion) {
      // code...
      $concepcionessArray[$concepcion->id] = $concepcion->concepcion;
    }

    return $concepcionessArray;
  }
}

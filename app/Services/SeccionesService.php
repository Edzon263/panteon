<?php
namespace App\Services;

use App\Secciones;

class SeccionesService{

  public function get(){
    $secciones =  Secciones::get();
    $seccionesArray[""] = "Seleccione una seccion";
    foreach ($secciones as $seccion) {
      // code...
      $seccionesArray[$seccion->id] = $seccion->seccion;
    }

    return $seccionesArray;
  }
}

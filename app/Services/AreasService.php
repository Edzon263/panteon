<?php
namespace App\Services;

use App\Areas;

class AreasService{

  public function get(){
    $areas =  Areas::get();
    $areasArray[""] = "Seleccione una area";
    foreach ($areas as $area) {
      // code...
      $areasArray[$area->id] = $area->nombre;
    }

    return $areasArray;
  }
}

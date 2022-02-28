<?php

namespace App\Services;

use App\Clasificaciones;

class ClasificacionService
{
    public function get()
    {
        $clacificaciones =  Clasificaciones::get();
        $clasificacionesArray[""] = "Seleccione una clasificacion";
        foreach ($clacificaciones as $clasificacion) {
            // code...
            $clasificacionesArray[$clasificacion->id] = $clasificacion->clasificacion;
        }

        return $clasificacionesArray;
    }
}

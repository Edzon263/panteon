<?php

namespace App\Services;

use App\TiposServicio;

class TipoService
{
    public function get()
    {
        $tipos =  TiposServicio::get();
        $tiposArray[""] = "Seleccione un tipo de servicio";
        foreach ($tipos as $tipo) {
            // code...
            $tiposArray[$tipo->id] = $tipo->tipo;
        }

        return $tiposArray;
    }
}

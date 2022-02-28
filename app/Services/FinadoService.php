<?php

namespace App\Services;

use App\Finados;

class FinadoService
{
    public function get()
    {
        $finados =  Finados::get();
        $finadosArray[""] = "Seleccione un finado";
        foreach ($finados as $finado) {
            // code...
            $finadosArray[$finado->id] = ($finado->nombre) . " ". ($finado->apellido_paterno). " ". ($finado->apellido_materno);
        }

        return $finadosArray;
    }
}

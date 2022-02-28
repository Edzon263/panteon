<?php

namespace App\Services;

use App\Titulares;

class TitularesService
{
    public function get()
    {
        $titulares =  Titulares::get();
        $titularesArray[""] = "Seleccione un titular";
        foreach ($titulares as $titular) {
            // code...
            $titularesArray[$titular->id] = ($titular->nombre) . " ". ($titular->apellido_paterno). " ". ($titular->apellido_materno);
        }

        return $titularesArray;
    }
}

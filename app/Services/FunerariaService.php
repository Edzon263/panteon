<?php

namespace App\Services;

use App\Funerarias;

class FunerariaService
{
    public function get()
    {
        $funerarias =  Funerarias::get();
        $funerariasArray[""] = "Seleccione una funeraria";
        foreach ($funerarias as $funeraria) {
            // code...
            $funerariasArray[$funeraria->id] = $funeraria->nombre;
        }

        return $funerariasArray;
    }
}

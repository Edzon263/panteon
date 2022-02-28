<?php

namespace App\Services;

use App\Lotes;

class LoteService
{
    public function get()
    {
        $lotes =  Lotes::get();
        $lotesArray[""] = "Seleccione un lote";
        foreach ($lotes as $lote) {
            // code...
            $lotesArray[$lote->id] = $lote->id;
        }

        return $lotesArray;
    }
}

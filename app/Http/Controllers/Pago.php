<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagos;

class Pago extends Controller
{
    //
    public function store(Request $request)
    {

        $Pagos = new Pagos();

        $Pagos->fecha_pago = $request->fecha_pago;
        $Pagos->fk_titular_id = $request->titular;
        $Pagos->fk_lote_id = $request->lote;
        $Pagos->cantidad = $request->cantidad;

        $Pagos->save();
        return redirect("pagos")->with('guardado', 'datos guardados exitosamente');
    }
}

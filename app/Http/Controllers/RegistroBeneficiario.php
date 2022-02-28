<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiarios;

class RegistroBeneficiario extends Controller
{
    //
    public function store(Request $request)
    {
        //        request()->validate([
        //     'nombre'=> 'required|max:50|alpha',
        //     'apellido_paterno' =>  'required|max:50|alpha',
        //     'apellido_materno' =>  'required|max:50|alpha',
        //     'calle' =>  'required|max:50|alpha',
        //     'colonia' =>  'required|max:50|alpha',
        //     // 'calle' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
        //     // 'colonia' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
        //     'codigo_postal' =>  'required|integer',
        //     'municipio' =>  'required|max:50',
        //     'telefono' =>  'required',
        // ]);

        for ($i=0; $i < 8; $i++) {
            // code...
            $array = ["nombre", "apellido_paterno", "apellido_materno", "lote"];
            $nombre = $array[0] . $i;
            $validar = $request->$nombre;

            if (strlen($validar) > 0) {
                // code...
                $Beneficiario = new Beneficiarios();
                $apellido_paterno = $array[1].$i;
                $apellido_materno = $array[2].$i;
                $lote = $array[3].$i;
                $Beneficiario->nombre = $validar;
                $Beneficiario->apellido_paterno = $request->$apellido_paterno;
                $Beneficiario->apellido_materno = $request->$apellido_materno;
                $Beneficiario->fk_lote_id = $request->$lote;
                $Beneficiario->save();
            }
        }
        return redirect("registrobeneficiarios")->with('guardado', 'datos guardados exitosamente');
    }
}

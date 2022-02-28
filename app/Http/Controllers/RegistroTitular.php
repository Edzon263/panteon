<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Titulares;
use Illuminate\Http\Request;

class RegistroTitular extends Controller
{
    protected $messages = [
     'nombre.required'=> 'Este campo es obligatorio.',
     'nombre.max:50'=> 'Solo tiene un limite de 50 letras',
     'nombre.alpha'=> 'Solo puede ingresar letras en este campo.',
     'apellido_paterno.required' => 'Este campo es obligatorio.',
     'apellido_paterno.max:50' =>'Solo tiene un limite de 50 letras',
     'apellido_paterno.alpha' =>'Solo puede ingresar letras en este campo.',
     'apellido_materno.required' => 'Este campo es obligatorio.',
     'apellido_materno.max:50' =>'Solo tiene un limite de 50 letras',
     'apellido_materno.alpha' =>'Solo puede ingresar letras en este campo.',
     'calle.required' =>'Este campo es obligatorio.',
     'calle.max:50' =>'Solo tiene un limite de 50 letras',
     'colonia.required' =>'Este campo es obligatorio.',
     'colonia.max:50' =>'Solo tiene un limite de 50 letras',
     'codigo_postal.required' =>'Este campo es obligatorio.',
     'codigo_postal.integer' =>'Solo puede ingresar numeros.',
     'municipio.required' =>'Este campo es obligatorio.',
     'municipio.max:50' =>'Solo tiene un limite de 50 letras',
     'telefono.required' =>'Este campo es obligatorio.',
     'telefono.integer' =>'Solo puede ingresar numeros.',
                       ];
    public function store(Request $request)
    {
        request()->validate([
     'nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
     'apellido_paterno' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
     'apellido_materno' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
     'calle' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
     'colonia' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ0-9.-0]*)*)+$/',
     'codigo_postal' =>  'required|integer',
     'municipio' =>  'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
     'telefono' =>  'required|integer'
 ]);

        $Titular = new Titulares();

        $Titular->nombre = $request->nombre;
        $Titular->apellido_paterno = $request->apellido_paterno;
        $Titular->apellido_materno = $request->apellido_materno;
        $Titular->calle = $request->calle;
        $Titular->numero = $request->numero;
        $Titular->colonia = $request->colonia;
        $Titular->codigo_postal = $request->codigo_postal;
        $Titular->municipio = $request->municipio;
        $Titular->telefono = $request->telefono;

        $Titular->save();
        return redirect("registrolotes")->with('guardado', 'datos guardados exitosamente');
    }

    public function getTitular(Request $request)
    {
        if ($request->ajax()) {
            $titular = Titulares::select("id")->where('nombre', $request->nombre)->get();
        }
        return response($titular);
    }
}

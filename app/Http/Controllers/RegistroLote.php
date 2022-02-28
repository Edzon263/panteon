<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lotes;
use App\Areas;
use App\Concepciones;
use App\Secciones;
use Illuminate\Http\Request;

class RegistroLote extends Controller
{
    protected $messages = [
   'numero_consecion.required' =>'Este campo es obligatorio.',
   'numero_consecion.integer' =>'Solo puede ingresar numeros.',
   'estatus.required'=> 'Este campo es obligatorio.',
   'estatus.max:50'=> 'Solo tiene un limite de 50 letras',
   'estatus.alpha'=> 'Solo puede ingresar letras en este campo.',
    'colindancia_norte.required' => 'Este campo es obligatorio.',
    'colindancia_norte.max:50' =>'Solo tiene un limite de 50 letras',
    'medida_norte.required' =>'Este campo es obligatorio.',
    'medida_norte.numeric' =>'Solo puede ingresar numeros.',
    'colindancia_sur.required' => 'Este campo es obligatorio.',
    'colindancia_sur.max:50' =>'Solo tiene un limite de 50 letras',
    'medida_sur.required' =>'Este campo es obligatorio.',
    'medida_sur.numeric' =>'Solo puede ingresar numeros.',
    'colindancia_oriente.required' => 'Este campo es obligatorio.',
    'colindancia_oriente.max:50' =>'Solo tiene un limite de 50 letras',
    'medida_oriente.required' =>'Este campo es obligatorio.',
    'medida_oriente.numeric' =>'Solo puede ingresar numeros.',
    'colindancia_poniente.required' => 'Este campo es obligatorio.',
    'colindancia_poniente.max:50' =>'Solo tiene un limite de 50 letras',
    'medida_poniente.required' =>'Este campo es obligatorio.',
    'medida_poniente.numeric' =>'Solo puede ingresar numeros.',
    'medida_total.required' =>'Este campo es obligatorio.',
    'medida_total.numeric' =>'Solo puede ingresar numeros.',
    'geoubicacion.required' =>'Este campo es obligatorio.',
    'geoubicacion.max:50' =>'Solo tiene un limite de 50 letras',
                          ];
    public function index()
    {
        return view('registrolotes', [
      'tipos_conseciones'=>Concepciones::all(),
      'tipos_sectores'=>Secciones::all(),
      'tipos_areas'=>Areas::all()
    ]);
    }
    public function store(Request $request)
    {
       //  request()->validate([
       // 'fk_titular_id'=>'required|exists:titulares,id',
       // 'fecha_refrendo'=>'required',
       // 'fk_seccion_id'=> 'required|exists:secciones,id',
       // 'fk_area_id'=> 'required|exists:areas,id',
       // 'numero_concepcion' => 'required|integer',
       // 'fk_concepcion_id'=> 'required|exists:concepciones,id',
       // 'estatus' =>  'required|max:50|alpha',
       // 'colindancia_norte' => 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
       // 'medida_norte' =>'required|numeric|between:0,599.99',
       // 'colindancia_sur ' => 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
       // 'medida_sur' =>'required|numeric|between:0,599.99',
       // 'colindancia_oriente' => 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
       // 'medida_oriente' =>'required|numeric|between:0,599.99',
       // 'colindancia_poniente' => 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
       // 'medida_poniente' =>'required|numeric|between:0,599.99',
       // 'medida_total' =>'required|numeric|between:0,599.99',
       // 'geoubicacion' => 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0]*)*)+$/',
       // ]);

        $Lote = new Lotes();
        $Lote -> fk_titular_id = $request -> titular;
        $Lote -> fecha_refrendo = $request -> fecha_refrendo;
        $Lote -> fk_seccion_id = $request -> seccion;
        $Lote -> fk_area_id = $request -> area;
        $Lote -> numero_concepcion = $request -> numero_concepcion;
        $Lote -> fk_concepcion_id = $request -> concepcion;
        $Lote -> estatus = $request -> estatus;
        $Lote -> colindancia_norte = $request -> colindancia_norte;
        $Lote -> medida_norte = $request -> medida_norte;
        $Lote -> colindancia_sur = $request -> colindancia_sur;
        $Lote -> medida_sur = $request -> medida_sur;
        $Lote -> colindancia_oriente = $request -> colindancia_oriente;
        $Lote -> medida_oriente = $request -> medida_oriente;
        $Lote -> colindancia_poniente = $request -> colindancia_poniente;
        $Lote -> medida_poniente = $request -> medida_poniente;
        $Lote -> medida_total = $request -> medida_total;
        $Lote -> geoubicacion = $request -> geoubicacion;

        $Lote -> save();
        return redirect("registroservicios")->with('guardado', 'datos guardados exitosamente');
    }

    public function getLotes(Request $request)
    {
      if($request->ajax()){
        $lotes = Lotes::where('fk_titular_id', $request->titular_id)->get();
        foreach ($lotes as $lote) {
          // code...
          $lotesArray[$lote->id] = $lote->id;
        }
      }
      return response()->json($lotesArray);
    }
}

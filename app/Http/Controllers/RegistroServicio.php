<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Servicios;
use App\Finados;
use Illuminate\Http\Request;

class RegistroServicio extends Controller
{
    protected $messages = [
      'fecha_servicio.required' =>  'Este campo es obligatorio.',
      'fk_tipo_servicio_id.required' =>  'Este campo es obligatorio.',
      'fk_finado_id.required' =>  'Este campo es obligatorio.',
      'solicitante_nombre.required' =>  'Este campo es obligatorio.',
      'solicitante_apellido_paterno.required' =>  'Este campo es obligatorio.',
      'solicitante_apellido_materno.required' =>  'Este campo es obligatorio.',
      'telefono.required' =>  'Este campo es obligatorio.',
      'fk_funeraria_id.required' =>  'Este campo es obligatorio.',
      'fk_lote_id_actual.required' =>  'Este campo es obligatorio.',
      'fk_lote_id_reihumacion.required' =>  'Este campo es obligatorio.',
      'libro.required' =>  'Este campo es obligatorio.',
      'hoja.required' =>  'Este campo es obligatorio.',
      'memorandum.required' =>  'Este campo es obligatorio.',
      'observaciones.required' =>  'Este campo es obligatorio.'
                        ];
    public function index()
    {
        return view('registroservicios');
    }

    public function store(Request $request)
    {
        // request()->validate([
        // 'fecha_servicio' =>  'required',
        // 'fk_tipo_servicio_id'=> 'required|exists:tipos_servicios,id',
        // 'fk_finado_id'=> 'required|exists:finados,id',
        // 'solicitante_nombre'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0 ]*)*)+$/',
        // 'solicitante_apellido_paterno'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0 ]*)*)+$/',
        // 'solicitante_apellido_materno'=> 'required|max:50|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0 ]*)*)+$/',
        // 'telefono'=>  'required|integer',
        // 'fk_funeraria_id'=> 'required|exists:funerarias,id',
        // 'fk_lote_id_actual'=> 'required|exists:lotes,id',
        // 'fk_lote_id_reihumacion'=> 'required|exists:lotes,id',
        // 'libro'=> 'required|integer',
        // 'hoja'=> 'required|integer',
        // 'memorandum'=> 'required|integer',
        // 'observaciones'=> 'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ ])+((\s *)+([a-zA-ZñÑáéíóúÁÉÍÓÚ.-0 ]*)*)+$/',
        //       ]);

        $Finados = new Finados();
        $Servicios = new Servicios();
        $tipo_servicio = $request->tipo_servicio;

        if ($tipo_servicio == 1 || $tipo_servicio == 3) {
            // code...
            $Finados->nombre = $request->nombre;
            $Finados->apellido_paterno = $request->apellido_paterno;
            $Finados->apellido_materno = $request->apellido_materno;
            $Finados->fecha_nacimiento = $request->fecha_nacimiento;
            $Finados->causa_muerte = $request->causa_muerte;
            $Finados->sexo = $request->sexo;
            $Finados->fk_clasificacion_id = $request->clasificacion;
            $Finados->fk_titular_id = $request->titular;
            $Finados->fk_lotes_id = $request->lote;
            $Finados->save();
            $id_finados = Finados::select('id')->latest()->get();
            $ultimo = $id_finados[0]['id'];
            $Servicios->fk_finado_id = $ultimo;
            $Servicios->fk_lote_id_actual = $request->lote;
            $Servicios->fk_lote_id_reihumacion = null;
        }

        if ($tipo_servicio == 2) {
            $Servicios->fk_finado_id = $request->finado_select;
            $Servicios->fk_lote_id_actual = $request->lote_actual;
            $Servicios->fk_lote_id_reihumacion = $request->lote_reihumacion;
            $nuevo_lote = Finados::find($request->finado_select);
            $nuevo_lote->fk_lotes_id = $request->lote_reihumacion;
            $nuevo_lote->save();
        }

        $Servicios->fecha_servicio = $request->fecha_servicio;
        $Servicios->fk_tipo_servicio_id = $tipo_servicio;
        $Servicios->solicitante_nombre = $request->solicitante_nombre;
        $Servicios->solicitante_apellido_paterno = $request->solicitante_apellido_paterno;
        $Servicios->solicitante_apellido_materno = $request->solicitante_apellido_materno;
        $Servicios->telefono = $request->telefono;
        $Servicios->fk_funeraria_id = $request->funeraria;
        $Servicios->fecha_servicio = $request->fecha_servicio;
        $Servicios->libro = $request->libro;
        $Servicios->hoja = $request->hoja;
        $Servicios->memorandum = $request->memorandum;
        $Servicios->observaciones = $request->observaciones;

        $Servicios->save();
        return redirect("registroservicios")->with('guardado', 'datos guardados exitosamente');
    }

    public function getLoteFinado(Request $request)
    {
        if ($request->ajax()) {
            $lote = Finados::select('fk_lotes_id', 'fk_titular_id')->where('id', $request->finado_id)->get();
        }
        return response($lote);
    }
}

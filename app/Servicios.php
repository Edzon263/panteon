<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //
    protected $table = 'Servicios';

    protected $fillable = [
      'id',
      'fecha_servicio',
      'fk_tipo_servicio_id',
      'fk_finado_id',
      'causa_muerte',
      'solicitante_nombre',
      'solicitante_apellido_paterno',
      'solicitante_apellido_materno',
      'telefono',
      'fk_funeraria_id',
      'fk_lote_id_actual',
      'fk_lote_id_reihumacion',
      'fk_libro_id',
      'hoja',
      'fk_memorandum_id',
      'observaciones'
    ];
}

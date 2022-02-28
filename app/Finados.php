<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finados extends Model
{
    //
    protected $table = 'Finados';

    protected $fillable = [
      'id',
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'fecha_nacimiento',
      'sexo',
      'fk_clasificacion_id',
      'fk_titular_id',
      'fk_lotes_id',
      'created_at'
    ];
}

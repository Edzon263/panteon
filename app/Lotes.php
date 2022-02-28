<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotes extends Model
{
    //Hola mundo
    protected $table = 'Lotes';

    protected $fillable = [
      'id',
      'fk_titular_id',
      'fecha_refendo',
      'fk_seccion_id',
      'fk_area_id',
      'numero_concepcion',
      'fk_concepcion_id',
      'estatus',
      'colindancia_norte',
      'medida_norte',
      'colindancia_sur',
      'medida_sur',
      'colindancia_oriente',
      'medida_oriente',
      'colindancia_poniente',
      'medida_poniente',
      'medida_total',
      'geoubicacion'
    ];
}

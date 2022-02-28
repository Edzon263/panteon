<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    //
    protected $table = 'Pagos';

    protected $fillable = [
      'id',
      'fecha_pago',
      'fk_titular_id',
      'fk_lote_id',
      'cantidad'
    ];
}

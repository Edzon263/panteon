<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiarios extends Model
{
    //
    protected $table = 'Beneficiarios';

    protected $fillable = [
      'id',
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'fk_lote_id'
    ];
}

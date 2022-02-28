<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funerarias extends Model
{
    //
    protected $table = 'Funerarias';

    protected $fillable = [
      'id',
      'nombre',
      'telefono',
      'direccion'
    ];
}

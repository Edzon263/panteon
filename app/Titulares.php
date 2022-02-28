<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulares extends Model
{
    //
    protected $table = 'Titulares';

    protected $fillable = [
      'id',
      'nombre',
      'apellido_paterno',
      'apellido_materno',
      'calle',
      'numero',
      'colonia',
      'codigo_postal',
      'municipio',
      'telefono',
    ];
}

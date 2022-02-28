<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposServicio extends Model
{
    protected $table = 'tipos_servicios';

    protected $fillable = [
        'id',
        'tipo'
      ];
}

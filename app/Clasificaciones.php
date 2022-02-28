<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    //
    protected $table = 'Clasificaciones';

    protected $fillable = [
      'id',
      'clasificacion'
    ];
}

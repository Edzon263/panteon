<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    //
    protected $table = 'Areas';

    protected $fillable = [
      'id',
      'nombre'
    ];
}

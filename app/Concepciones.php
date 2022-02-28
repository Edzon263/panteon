<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepciones extends Model
{
    //
    protected $table = 'Concepciones';

    protected $fillable = [
      'id',
      'concepcion'
    ];
}

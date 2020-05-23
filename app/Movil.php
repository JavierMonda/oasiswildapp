<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    protected $table = 'moviles';
    protected $fillable = [
        'extension', 'numero', 'trabajador', 'departamento'
    ];
}

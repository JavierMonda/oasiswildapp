<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [
        'live', 'language', 'name', 'email', 'children', 'age', 'condition1', 'condition2', 'conditionChild'
    ];
}

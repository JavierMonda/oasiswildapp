<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $fillable = [
        'restaurant', 'language', 'question1', 'question2', 'question3', 'question4', 'question5', 'comment'
    ];
}

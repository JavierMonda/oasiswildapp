<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guagua extends Model
{
    protected $fillable = [
        'guagua', 'language', 'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'comment'
    ];
}

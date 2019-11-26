<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    protected $table = 'functions';

    protected $fillable = [
        'question', 'coef_a', 'coef_b', 'coef_c', 'delta', 'x1', 'x2'
    ];
}

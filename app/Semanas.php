<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semanas extends Model
{
    protected $table = 'semanas';
    protected $fillable = [
        'fecha',
        'nombre',
    ];
}

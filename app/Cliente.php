<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'tarjeta',
        'celular',
        'direccion',
        'aval',
        'direccion_aval'
    ];
}

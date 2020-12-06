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

    public function scopeNombre($query, $nombre)
    {
        if ($nombre)

            return $query->where('nombre','LIKE',"%$nombre%");
    }

    public function scopeTarjeta($query, $tarjeta)
    {
        if ($tarjeta)
            return $query->where('tarjeta','LIKE',"%$tarjeta%");
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_semana extends Model
{
    protected $table = 'cliente_semanas';
    protected $fillable = [
        'cliente_id',
        'semana_id',
        'pagos_id',
    ];

    public function getCliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function getSemana(){
        return $this->belongsTo(Semanas::class, 'semana_id');
    }
    public function getPago(){
        return $this->belongsTo(Pagos::class, 'pagos_id');
    }
    public function getGrupo(){
        return $this->belongsTo(Cliente_grupos::class, 'cliente_id');
    }
}

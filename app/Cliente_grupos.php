<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_grupos extends Model
{
    protected $table = 'cliente_grupos';
    protected $fillable = [
        'cliente_id',
        'grupo_id',
    ];
    public function getGrupo(){
        return $this->belongsTo(Grupos::class, 'grupo_id');
    }
    public function getCliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos'; 
    public $timestamps = false;

    protected $fillable = [
        'nome', 'data_inicio', 'data_fim', 'local', 'num_max_participantes', 'tipo_programacao_id'
    ];

}

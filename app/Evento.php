<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ScheduleType;

class Evento extends Model
{
    protected $table = 'eventos'; 
    public $timestamps = false;

    protected $fillable = [
        'nome', 'data_inicio', 'data_fim', 'local', 'num_max_participantes', 'tipo_programacao_id'

    ];

    public function evento()
    {
        return $this->hasOne('App\ScheduleType', 'id', 'tipo_programacao_id');
    }
}

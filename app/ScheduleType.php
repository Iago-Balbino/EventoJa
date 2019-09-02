<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Evento;

class ScheduleType extends Model
{
    protected $table = 'tipo_programacao';

  
    protected $fillable = [
        'nome'
    ];
    
    public function tipo_evento()
    {
        return $this->hasOne('App\Evento');
    }

}

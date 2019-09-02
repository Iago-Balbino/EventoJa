<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleType extends Model
{
    protected $table = 'tipo_programacao';

    protected $fillable = [
        'nome'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'cadastro';
    public $timestamps = false;

    protected $fillable = [
        'evento_id', 'user_id'
    ];

}

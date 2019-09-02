<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evento;
use App\ScheduleType;
use Faker\Generator as Faker;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$faker = \Faker\Factory::create('pt_BR');

$factory->define(Evento::class, function (Faker $faker) {
    
    $tipo_evento = ScheduleType::pluck('id')->toArray();
    
    return [
        'nome' => $faker->name,
        'local' => $faker->city . '-' . $faker->state,
        'data_inicio' => now(),
        'data_fim' =>  now()->addMonth(2),
        'num_max_participantes' => rand(1, 50),
        'tipo_programacao_id' => $faker->randomElement($tipo_evento)
    ];
});

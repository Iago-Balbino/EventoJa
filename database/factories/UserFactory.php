<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\UsersType;

use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    
    $tipo_usuario = UsersType::pluck('id')->toArray();

    return [
        'name' => $faker->name,
        'cpf' => $faker->cpf,
        'telefone' => $faker->telefone,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'tipo_usuario_id' => $faker->randomElement($tipo_usuario)
    ];
});

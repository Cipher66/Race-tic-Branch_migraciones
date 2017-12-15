<?php

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

$factory->define(App\Cars::class, function (Faker $faker) {
    static $password;

    return [
        'num_serie' => str_random(10),
        'marca' => $faker->name,
        'motorizacion' => $faker->name,
        'modelo'=>str_random(3),
        'mensaje' => text()
    ];
});

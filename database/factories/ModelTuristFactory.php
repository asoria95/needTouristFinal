<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Personas\ModelTurist::class, function (Faker $faker) {
    return [
        'idioma' => $faker->title,
        'residencia' => $faker->address
    ];
});

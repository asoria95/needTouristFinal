<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Personas\ModelAdministrator::class, function (Faker $faker) {
    return [
        'cargo' => $faker->title
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Personas\ModelAfilliate::class, function (Faker $faker) {
    return [
      'direccion' => $faker->Address,
      'edad' => rand(18, 65),
      'curriculum' => $faker->image
    ];
});

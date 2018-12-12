<?php

use Faker\Generator as Faker;

$factory->define(App\Motoristas::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'cnh' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});

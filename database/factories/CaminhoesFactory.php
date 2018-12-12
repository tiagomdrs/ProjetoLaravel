<?php

use Faker\Generator as Faker;


$factory->define(App\Caminhoes::class, function (Faker $faker) {
    
    return [
        'cor' => $faker->text(6),
        'placa' => $faker->text(6),

    ]; 
});

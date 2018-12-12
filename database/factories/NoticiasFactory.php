<?php

use Faker\Generator as Faker;

$factory->define(App\Noticias::class, function (Faker $faker) {
    return [
        'tt_principal' => $faker->sentence(4),
        'tt_auxiliar' => $faker->sentence(10),
        'corpo' => $faker->text(100),
        'id_adm' => function(){
    		$count = App\User::get()->count();
    		return App\User::find(rand(1,$count));
    	},
    ];
});

<?php

use App\Categorias;
use Faker\Generator as Faker;

$factory->define(Categorias::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3)
    ];
});

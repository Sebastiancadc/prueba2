<?php

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'contenido' => $faker->text,
    ];
});

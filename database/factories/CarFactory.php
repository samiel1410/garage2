<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;


$factory->define(Car::class, function (Faker $faker) {
    return [
        'Modelo' => $faker->text,
        'Cilindraje' => $faker->text,
        'Año' => $faker->word,
        'Color' => $faker->text,
        'Precio' => $faker->randomFloat(),
    ];
});

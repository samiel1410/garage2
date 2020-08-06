<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Bare;
use Faker\Generator as Faker;


$factory->define(Bare::class, function (Faker $faker) {
    return [
        'camp_id' => $faker->optional()->randomDigit,
        'nombre' => $faker->text,
        'abierto' => $faker->randomDigit,
    ];
});

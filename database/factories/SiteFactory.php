<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Site;
use Faker\Generator as Faker;


$factory->define(Site::class, function (Faker $faker) {
    return [
        'numero' => $faker->randomDigit,
        'dimensión' => $faker->randomDigit,
        'ubicación' => $faker->text(1024),
    ];
});

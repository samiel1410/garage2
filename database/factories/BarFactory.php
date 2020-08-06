<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Bar;
use Faker\Generator as Faker;
use App\Campus;


$factory->define(Bar::class, function (Faker $faker) {
    return [
        'campus_id' => $faker->optional()->randomDigit,
        'nombre' => $faker->text,
        'abierto' => $faker->boolean,
        //campus BelongsTo Campus campus_id
    ];
});

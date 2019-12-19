<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id'=> $faker->unique()->numberBetween($min = 1, $max = 5),
        'bio' => $faker->sentence

    ];
});

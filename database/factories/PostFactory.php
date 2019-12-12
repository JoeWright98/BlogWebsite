<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->text(),
        'user_id' => User::all()->random()->id

        //'user_id'=> $faker->numberBetween($min = 1, $max = 5)
    ];
});

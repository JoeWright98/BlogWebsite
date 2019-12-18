<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph(),
        'user_id' => User::all()->random()->id,
        'author' => User::all()->random()->name,
        'abstract' => $faker->sentence(),
        'title' => $faker->sentence()

        //'user_id'=> $faker->numberBetween($min = 1, $max = 5)
    ];
});

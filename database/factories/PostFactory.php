<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use App\Profile;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph(),
        'user_id' => User::all()->random()->id,
        'author' => Profile::all()->random()->name,
        'abstract' => $faker->sentence(),
        'title' => $faker->sentence()

        //'user_id'=> $faker->numberBetween($min = 1, $max = 5)
    ];
});

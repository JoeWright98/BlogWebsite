<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
      'content' => $faker->text(),
      'user_id'=> $faker->numberBetween($min = 1, $max = 5),
      'post_id'=> $faker->numberBetween($min = 1, $max = 5)
    ];
});

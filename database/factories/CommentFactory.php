<?php

/** @var Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 20),
        'user_id' => rand(1, 20),
        'content' => $faker->words(100, true)
    ];
});

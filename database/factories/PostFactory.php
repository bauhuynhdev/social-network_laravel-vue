<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->words(200, true),
        'user_id' => rand(1, 20)
    ];
});

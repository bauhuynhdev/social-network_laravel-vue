<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'content' => $faker->words(200, true),
        'user_id' => rand(1, 20),
        'created_at' => $faker->dateTimeBetween('-3 days', 'now', 'Asia/Ho_Chi_Minh')
    ];
});

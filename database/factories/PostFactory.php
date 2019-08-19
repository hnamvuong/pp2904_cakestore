<?php

use App\Models\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->sentence(500),
        'image' => $faker->imageUrl($width = 200, $height = 200),
    ];
});

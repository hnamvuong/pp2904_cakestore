<?php

use App\Models\Slide;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'link' => $faker->url,
        'image' => $faker->imageUrl($width = 200, $height = 200),
    ];
});

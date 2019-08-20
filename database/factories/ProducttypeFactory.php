<?php

use App\Models\ProductType;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(ProductType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'image' => $faker->imageUrl($width = 200, $height = 200),
    ];
});

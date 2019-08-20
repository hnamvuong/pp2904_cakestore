<?php

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$id_type = DB::table('product_types')->pluck('id');

    return [
    	'name' => $faker->name,
        'id_type' => $faker->randomElement($id_type),
        'description' => $faker->sentence,
        'unit_price' => $faker->numberBetween($min = 10, $max = 200),
        'promotion_price' => $faker->numberBetween($min = 10, $max = 200),
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'unit' => $faker->numberBetween($min = 10, $max = 100),
        'new' => $faker->numberBetween($min = 0, $max = 10),
    ];
});

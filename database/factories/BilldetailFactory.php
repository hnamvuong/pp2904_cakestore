<?php

use App\Models\BillDetail;
use App\Models\Bill;
use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(BillDetail::class, function (Faker $faker) {
	$id_bill = DB::table('bills')->pluck('id');
	$id_product = DB::table('products')->pluck('id');

    return [
        'id_bill' => $faker->randomElement($id_bill),
        'id_product' => $faker->randomElement($id_product),
        'quantity' => $faker->numberBetween($min = 10, $max = 50),
        'unit_price' => $faker->numberBetween($min = 1000, $max = 20000),
    ];
});

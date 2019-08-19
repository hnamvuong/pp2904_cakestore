<?php

use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
	$id_customer = DB::table('customers')->pluck('id');

    return [
        'id_customer' => $faker->randomElement($id_customer),
        'date_oder' => $faker->date("Y-m-d H:i:s"),
        'total' => $faker->numberBetween($min = 10, $max = 50),
        'payment' => $faker->creditCardType,
        'note' => $faker->sentence,
    ];
});

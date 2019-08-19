<?php

use App\Models\Customer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'gender' => $faker->numberBetween($min = 0, $max = 2),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'phone_number' => $faker->e164PhoneNumber,
        'note' => $faker->sentence,
    ];
});

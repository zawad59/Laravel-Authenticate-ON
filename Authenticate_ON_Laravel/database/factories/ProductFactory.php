<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product_Codes;
use Faker\Generator as Faker;

$factory->define(Product_Codes::class, function (Faker $faker) {
    return [
        //
        'item_code' => $faker->numberBetween($min = 100000000, $max = 900000000),
        'country' => $faker->country,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'product_details' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
    ];
});

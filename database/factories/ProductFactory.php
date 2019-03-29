<?php

use Faker\Generator as Faker;

$factory->define(Stock\Core\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'price' => $faker->randomFloat(2),
        'quantity' => $faker->randomNumber,
        'size' => $faker->word,
    ];
});


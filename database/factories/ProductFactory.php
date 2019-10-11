<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->realText(),
        'colors' => ['red', 'green', 'blue', 'dark'],
        'price' => $faker->numberBetween(500, 10000),
        'active' => true,
        'category_id' => $faker->numberBetween(1, \App\Category::all()->last()->id),
        'rating' => $faker->numberBetween(0, 5),
    ];
});

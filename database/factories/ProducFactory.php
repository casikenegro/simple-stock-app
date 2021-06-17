<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    return [
        "code"=>$this->faker->numberBetween(10, 200), 
        "description"=>Str::random(10), 
        "unit"=>Str::random(10),
        "min_stock"=>$this->faker->numberBetween(10, 200),
        "max_stock"=>$this->faker->numberBetween(10, 200),
        "point_order"=>$this->faker->numberBetween(10, 200), 
        "current_stock"=>$this->faker->numberBetween(10, 200),
        "value"=>$this->faker->numberBetween(10, 200),
    ];
});


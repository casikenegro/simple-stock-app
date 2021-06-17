<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductMovement;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ProductMovement::class, function (Faker $faker) {
    $arrayValues = ['Salida', 'Entrada'];

    return [
        "movement"=>$arrayValues[rand(0,1)],
        "quantity"=>$this->faker->numberBetween(10, 200), 
        "retry_name"=>Str::random(10),
        "document"=>Str::random(10),
        "employee"=>Str::random(10),
        "ot"=>Str::random(10),
    ];
});


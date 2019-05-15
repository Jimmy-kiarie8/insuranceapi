<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'product' => $faker->name,
        'code' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'approvedddate' => $faker->date(),
        'approved_by' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'comments' => $faker->realText(),
        'approved' => $faker->boolean(),
        'active' => $faker->boolean(),
    ];
});

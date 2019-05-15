<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\models\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'address' => $faker->address,
        'country' => $faker->country,
        'active' => $faker->boolean,
        'code' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'approved' => $faker->boolean,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Residents;
use Faker\Generator as Faker;

$factory->define(Residents::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'unit_number'   => $faker->buildingNumber,
        'phone_number'  => $faker->e164PhoneNumber,
    ];
});

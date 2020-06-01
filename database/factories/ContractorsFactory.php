<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contractors;
use Faker\Generator as Faker;

$factory->define(Contractors::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'address'   => $faker->address
    ];
});

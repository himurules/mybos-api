<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ImportantNumbers;
use Faker\Generator as Faker;

$factory->define(ImportantNumbers::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'number'    =>  $faker->e164PhoneNumber
    ];
});

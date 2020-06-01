<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Buildings;
use Faker\Generator as Faker;

$factory->define(Buildings::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'state' => $faker->state,
        'suburb'    => $faker->city,
        'pr_status' => $faker->boolean,
        'pc_status' => $faker->boolean,
        'logo'  => 'https://data.mybos.com/9/2020-04-04/2HHYN46AYA.png',
        'photo' =>  'https://data.mybos.com/9/2020-03-12/3KBqHf14N4.jpg',
        'plan'  => $faker->randomDigit,
        'wCode' => $faker->uuid,
        'country'   => $faker->countryCode
    ];
});

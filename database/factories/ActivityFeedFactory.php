<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ActivityFeed;
use Faker\Generator as Faker;

$factory->define(ActivityFeed::class, function (Faker $faker) {
    return [
        'feed'  => $faker->sentence()
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WorkOrders;
use Faker\Generator as Faker;

$factory->define(WorkOrders::class, function (Faker $faker) {
    return [
        'wo_number' => $faker->randomElement(['WO#513 - A', 'WO#522 - A', 'WO#1021 - C', 'WO#451 - B', 'WO#8745 - D', 'WO#6987 - F', 'WO#554 - C', 'WO#665 - A']),
    ];
});

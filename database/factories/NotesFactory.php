<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Notes;
use Faker\Generator as Faker;

$factory->define(Notes::class, function (Faker $faker) {
    return [
        'note'  => $faker->paragraph
    ];
});

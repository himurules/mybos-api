<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cases;
use Faker\Generator as Faker;

$factory->define(Cases::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence,
        'description'   => $faker->text,
        'type'  =>  $faker->randomElement(['Defects', 'Irrigation', 'Repair & Maintenance', 'Common Repairs', 'Replacements', 'Gardening', 'Incident', 'Cleaning']),
        'due_date'  =>  $faker->dateTimeBetween('next Monday', 'next Monday +20 days'),
        'priority'  => $faker->randomElement(['urgent', 'high', 'medium', 'low']),
        'status'  => $faker->randomElement(['new', 'in progress', 'completed', 'deleted', 'awaiting approval']),
        'job_area'  => $faker->randomElement(['Common - Asset', 'Common -Non Asset', 'Private Lot']),
        'category'  => $faker->randomElement(['Air Conditioning', 'Common Area', 'Electrical', 'Gym', 'Hot Water', 'Lights', 'Lifts']),
        'has_attachment'    => $faker->boolean
    ];
});

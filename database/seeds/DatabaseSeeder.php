<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //populate users
        $users = factory(App\User::class, 10)->create();

        //populate contractors
        $contractors = factory(App\Models\Contractors::class, 20)->create();

        //populate important_numbers
        $important_numbers = factory(App\Models\ImportantNumbers::class, 50)->create();

        //populate buildings
        factory(App\Models\Buildings::class, 2)->create()->each(function ($building) {

            //populate activityFeed
            $activityFeed = factory(App\Models\ActivityFeed::class, 30)->make(['user_id' => \App\User::all()->random()->id]);
            $building->activityFeed()->saveMany($activityFeed);

            //populate cases
            $cases = factory(App\Models\Cases::class, 50)->make(['contractor_id' => \App\Models\Contractors::all()->random()->id]);
            $building->cases()->saveMany($cases);

            //populate notes
            $notes = factory(App\Models\Notes::class, 30)->make(['user_id' => \App\User::all()->random()->id]);
            $building->notes()->saveMany($notes);

            //populate residents
            $residents = factory(App\Models\Residents::class, 30)->make();
            $building->residents()->saveMany($residents);

            //populate work_orders
            $work_orders = factory(App\Models\WorkOrders::class, 40)->make(['contractor_id' => \App\Models\Contractors::all()->random()->id]);
            $building->workOrders()->saveMany($work_orders);
        });
    }
}

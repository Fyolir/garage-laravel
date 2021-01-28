<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicle;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(3)
            ->admin()
            ->create();
        $customers = User::factory()
            ->count(30)
            ->create();

        foreach ($customers as $customer){
            $customer->vehicles()->associate(Vehicle::all()->random());
       }
    }
}

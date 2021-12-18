<?php

namespace Database\Seeders;

use App\Models\Roomate;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoomateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Roomate::factory()
            ->count(5)
            ->hasBid(2)
            ->create();
    }
}

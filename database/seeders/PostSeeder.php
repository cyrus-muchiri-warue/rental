<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory()
            ->count(5)
            ->create()
            ->each(function ($user)
            {
             Post::factory()
                ->count(5)
                ->hasOrders(2)
                ->create(["user_id"=>$user->id]);
            }
            
            
            )->each(function ($post)
            {
              Category::factory()
              ->count(1)
              ->create(
                 
              );
              Location::factory()
              ->count(1)
              ->create(
                  
              );
            });
    }
}

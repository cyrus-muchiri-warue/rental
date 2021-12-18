<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id'=>function(){
                return Post::all()->random();
            },
            'user_id'=>function(){
                return User::all()->random();
            },
            'status'=>function(){
                $list=['approved','inprogress','rejected'];
                return collect($list)->random();
            }
        ];
    }
}

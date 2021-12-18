<?php

namespace Database\Factories;

use App\Models\Bid;
use App\Models\Roomate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list=[
            'Rejected',
            'Approved'
        ];

        return [
           'user_id'=>function(){
               return User::all()->random();
           },
           'roomate_id'=>function(){
                             return Roomate::all()->random();
                            },
            'amount'=>$this->faker->numberBetween(3000,20000),
            'status'=>collect($list)->random(),
        
        ];
    }
}

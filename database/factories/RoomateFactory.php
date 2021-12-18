<?php

namespace Database\Factories;

use App\Models\Roomate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Roomate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topic' => $this->faker->paragraph(),
            'location' => $this->faker->address,
            'user_id'=>function(){
                
                return User::all()->random();
            },
            'category'=>$this->faker->name(),
            'description' => $this->faker->text($max=200),
            'price' => $this->faker->numberBetween($int=1000,$max='30000'),
            'image' => 'house-9.jpg'
        ];
    }
}

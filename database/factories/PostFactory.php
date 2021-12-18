<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Building_name' => $this->faker->streetName(),
            'location' => $this->faker->address,
            
            'category'=>$this->faker->name(),
            'description' => $this->faker->text($max=200),
            'price' => $this->faker->numberBetween($int=1000,$max='30000'),
            'image' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            
        ];
       
    }
}

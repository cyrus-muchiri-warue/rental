<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list=[
            'single room',
            'bedsitter',
            '1 bedroom',
            '2 bedroom',
            '3 bedroom',
            '4 bedroom',
            
        ];
        return [
            'category'=>collect($list)->random(),
           
        ];
    }
}

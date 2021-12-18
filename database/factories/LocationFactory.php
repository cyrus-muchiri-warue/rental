<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list=[
            'kaithe',
            'kiajai',
            'makutano',
            'meru town ',
            'near ebony garden',
            'califonia',
            'maskan',
            'kilindini'
        ];
        return [
            'location' => collect($list)->random(),
       
        ];
    }
}

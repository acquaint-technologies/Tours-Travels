<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 101;
        return [
            'vehicle_name' => 'Airline ' . $number++,
            'cost' => $this->faker->numberBetween($min = 10000, $max = 50000),
        ];
    }
}

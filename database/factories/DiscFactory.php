<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disc>
 */
class DiscFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" =>$this->faker->title(),
            "price" => $this->faker->randomFloat(2,1,100),
            "year" => $this->faker->numberBetween(1600,2023)
        ];
    }
}

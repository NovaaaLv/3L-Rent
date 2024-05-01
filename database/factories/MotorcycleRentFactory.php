<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MotorcycleRent>
 */
class MotorcycleRentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'motorcycle_name' => $this->faker->randomElement(['Tesla', 'Victus', 'BMW']),
            'price' => $this->faker->numberBetween($min = 100000, $max = 1000000),
            'motorcycle_image' => $this->faker->imageUrl(),
            'transmisi' => $this->faker->randomElement(['Auto', 'Manually']),
            'engine_displacement' => $this->faker->numberBetween(100, 200) . ' CC',
            'fuel_capacity' => $this->faker->numberBetween(3, 10) . ' L',
        ];
    }
}

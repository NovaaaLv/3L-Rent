<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarRent>
 */
class CarRentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_name' => $this->faker->randomElement(['Tesla', 'Victus', 'BMW']),
            'price' => $this->faker->numberBetween($min = 100000, $max = 1000000),
            'car_image' => $this->faker->imageUrl(),
            'seat' => $this->faker->numberBetween(1, 5),
            'transmisi' => $this->faker->randomElement(['Auto', 'Manually']),
            'fuel' => $this->faker->randomElement(['Bensin', 'Solar', 'Bio Solar', 'Pertamax', 'Pertalite']),
            'insurance' => $this->faker->boolean() ? 'Ya' : 'Tidak',
            'type' => $this->faker->randomElement(['Vehicle', 'Clothes'])
        ];
    }
}

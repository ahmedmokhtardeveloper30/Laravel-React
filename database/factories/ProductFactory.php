<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->company(),
            'title' => $this->faker->sentence(3),
            'img' => $this->faker->imageUrl(640, 480, 'product', true),
            'rating' => $this->faker->randomFloat(1, 5, 0, 5),
            'reviews' => $this->faker->numberBetween(0, 1000),
            'sellPrice' => $this->faker->randomFloat(2, 10, 1000),
            'orders' => $this->faker->numberBetween(0, 1000),
            'mrp' => $this->faker->randomFloat(2, 10, 1000),
            'discount' => $this->faker->numberBetween(0, 50),
            'category' => $this->faker->randomElement(['men','women','kids'])
        ];
    }
}

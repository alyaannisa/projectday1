<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'PublishStatus' => fake()->randomElement(['draft', 'publish']),
            'price' => fake()->numberBetween(0, 500000),
            'category_id' => fake()->numberBetween(1, 100),
            'weight' => fake()->numberBetween(0, 5),
            'img_url'=> fake()->imageUrl(640, 480),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItems>
 */
class OrderItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => fake()->numberBetween(1, 10),
            'product_id' => fake()->numberBetween(51, 150),
            'product_name' => fake()->word(),
            'product_price' => fake()->numberBetween(0, 500000),
            'qyt' => fake()->numberBetween(0, 100),
            'subtotal' => fake()->numberBetween(0, 500000),
        ];
    }
}

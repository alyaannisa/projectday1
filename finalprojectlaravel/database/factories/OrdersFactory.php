<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id' => fake()->regexify('[A-Za-z0-9]{16}'),
            'order_status' => fake()->randomElement(['pending', 'on_progress', 'paid', 'delivered', 'done', 'cancel']),
            'order_total' => fake()->numberBetween(0, 100),
            'user_id' => fake()->numberBetween(1, 3),
            'order_date' => fake()->dateTimeThisMonth(),
        ];
    }
}

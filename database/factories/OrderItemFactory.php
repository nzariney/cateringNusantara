<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return ['order_id' => \App\Models\Order::factory(), 'menu_id' => \App\Models\Menu::inRandomOrder()->first()->id ?? \App\Models\Menu::factory(), 'qty' => fake()->numberBetween(1, 5), 'subtotal' => 0];
    }
}

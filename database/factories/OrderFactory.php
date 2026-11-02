<?php

namespace Database\Factories;

use App\Models\Courier;
use App\Models\Customer;
use App\Models\Order;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return ['customer_id' => \App\Models\Customer::inRandomOrder()->first()->id ?? \App\Models\Customer::factory(), 'payment_method_id' => \App\Models\PaymentMethod::inRandomOrder()->first()->id ?? \App\Models\PaymentMethod::factory(), 'courier_id' => \App\Models\Courier::inRandomOrder()->first()->id ?? \App\Models\Courier::factory(), 'status' => fake()->randomElement(['pending', 'processing', 'completed'])];
    }
}

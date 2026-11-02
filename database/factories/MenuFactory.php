<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return ['name' => fake()->words(3, true), 'price' => fake()->numberBetween(10, 100) * 1000, 'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? \App\Models\Category::factory()];
    }
}

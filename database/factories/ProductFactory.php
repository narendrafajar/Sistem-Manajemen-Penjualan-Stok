<?php

namespace Database\Factories;
use App\Models\Supplier;
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
            'name' => $this->faker->words(3, true),
            'stock' => $this->faker->numberBetween(1, 200),
            'price' => $this->faker->randomFloat(2, 10000, 2000000),
            'supplier_id' => Supplier::inRandomOrder()->first()->id
        ];
    }
}

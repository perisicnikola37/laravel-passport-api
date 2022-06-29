<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'user_id' => function() {
                return User::all()->random();
            },
            'detail' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->randomDigit(),
            'discount' => $this->faker->numberBetween(2, 30),
        ];
    }
}

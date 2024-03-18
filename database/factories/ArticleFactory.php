<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->text(50),
            'description'=> fake()->paragraph(3),
            'sell_price'=> fake()->randomFloat(2,100,1000),
            'shop_price'=> fake()->randomFloat(2,100,1000),
            'shipping'=> fake()->randomElement(['S','N']),
            'stock'=> fake()->numberBetween(0,6000),
            'observacions'=>fake()->optional()->paragraph(4)
        ];
    }
}

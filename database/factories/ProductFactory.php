<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'category_id' => Category::all()->random()->category_id,
            'name_product' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'view' => $this->faker->randomNumber,
            'description' =>$this->faker->text(),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            
        ];
    }
}

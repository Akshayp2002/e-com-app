<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductsCategory>
 */
class ProductcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            // Define attributes for the ProductCategory model
            'name'        => $this->faker->word,
            'description' => $this->faker->sentence,
            // Add any other attributes here
        ];
    }
}

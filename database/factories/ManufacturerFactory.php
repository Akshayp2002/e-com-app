<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence,
            'website' => $this->faker->url,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'policy' => $this->faker->text,
            'status' => $this->faker->randomElement(['1', '0']),
            // Add other attributes if needed
        ];
    }
}

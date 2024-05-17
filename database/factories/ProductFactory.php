<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'sku' => $this->faker->uuid,
            'cover_images' => 'https://loremflickr.com/500/650',
            'images' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'offer_price' => $this->faker->randomFloat(2, 5, 50),
            'tags' => $this->faker->words(3, true),
            'rating' => $this->faker->randomFloat(1, 0, 5),
            'category_id' => \App\Models\ProductCategory::factory()->create()->id,
            'manufacturer_id' => \App\Models\Manufacturer::factory()->create()->id,
        ];
    }
}

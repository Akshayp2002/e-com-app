<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $model = Product::class;

    public function run()
    {
        // Create 5 instances using the factory
        Product::factory()->count(20)->create();
    }
}

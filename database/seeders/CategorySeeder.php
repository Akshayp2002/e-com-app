<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $category = [
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Electronics',
                'description' => 'Devices and gadgets including mobile phones, laptops, and other electronics.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Fashion',
                'description' => 'Clothing, footwear, accessories, and more for men, women, and kids.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Home & Kitchen',
                'description' => 'Appliances, furniture, decor, and kitchenware for a comfortable home.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Health & Beauty',
                'description' => 'Products for personal care, skincare, and overall wellness.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Sports & Outdoors',
                'description' => 'Equipment, apparel, and accessories for sports and outdoor activities.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Toys & Games',
                'description' => 'Toys, games, and educational materials for children of all ages.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Books',
                'description' => 'A wide range of books from different genres and for all ages.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Automotive',
                'description' => 'Automobile parts, accessories, and tools for vehicle maintenance.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Groceries',
                'description' => 'Daily essentials, food items, and household supplies.',
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Pet Supplies',
                'description' => 'Food, toys, and accessories for pets.',
            ],
        ];

        foreach ($category as $data) {
            ProductCategory::create($data);
        }
        //Manufacturer

        $manufacturer = [
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Acme Corp',
                'logo'        => "https://example.com/logos/acme.png",
                'description' => "Leading manufacturer of industrial tools.",
                'website'     => "https://acme.com",
                'email'       => "info@acme.com",
                'phone'       => "+1234567890",
                'policy'      => "30-day return policy",
                'status'      => "1",
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Global Goods',
                'logo'        => "https://example.com/logos/global_goods.png",
                'description' => "Supplier of consumer electronics and gadgets.",
                'website'     => "https://globalgoods.com",
                'email'       => "support@globalgoods.com",
                'phone'       => "+0987654321",
                'policy'      => "1-year warranty on all products",
                'status'      => "1",
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Eco Friendly',
                'logo'        => "https://example.com/logos/eco_friendly.png",
                'description' => "Sustainable and eco-friendly household products.",
                'website'     => "https://ecofriendly.com",
                'email'       => "contact@ecofriendly.com",
                'phone'       => "+1122334455",
                'policy'      => "60-day satisfaction guarantee",
                'status'      => "1",
            ],
            [
                'uuid'        => Str::uuid(),
                'name'        => 'Tech Innovators',
                'logo'        => "https://example.com/logos/tech_innovators.png",
                'description' => "Innovative tech solutions for modern businesses.",
                'website'     => "https://techinnovators.com",
                'email'       => "hello@techinnovators.com",
                'phone'       => "+5566778899",
                'policy'      => "2-year limited warranty",
                'status'      => "1",
            ],
        ];

        foreach ($manufacturer as $manufacturerData) {
            Manufacturer::create($manufacturerData);
        }
    }
}

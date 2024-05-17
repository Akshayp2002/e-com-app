<?php

namespace Database\Factories;

use App\Models\AppSettings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppSettingsFactory extends Factory
{
    protected $model = AppSettings::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'title' => $this->faker->sentence(3),
            'logo_light' => $this->faker->imageUrl(400, 200, 'business', true, 'Faker'),
            'fav_icon' => $this->faker->imageUrl(64, 64, 'business', true, 'Faker'),
            'copyright' => $this->faker->company . ' ' . date('Y'),
            'cookie_text' => $this->faker->text(50),
            'enable_cookie' => $this->faker->boolean,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'twitter_url' => $this->faker->url,
            'facebook_url' => $this->faker->url,
            'instagram_url' => $this->faker->url,
            'other_url' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

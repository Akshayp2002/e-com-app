<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Seeder;


class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected $model = AppSettings::class;

    public function run()
    {
        // Create 5 instances using the factory
        AppSettings::factory()->count(5)->create();
    }
}

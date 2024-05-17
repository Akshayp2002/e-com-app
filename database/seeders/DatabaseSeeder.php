<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'uuid'     => Str::uuid(),
            'name'     => 'Test User1',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('password'),

        ]);
        User::create([
            'uuid'     => Str::uuid(),
            'name'     => 'Test User2',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(
            [
                AppSettingSeeder::class,
                ProductSeeder::class,
            ]
        );
    }
}

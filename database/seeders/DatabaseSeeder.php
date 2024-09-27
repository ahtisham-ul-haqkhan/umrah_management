<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Role::create(['name' => 'aaD'])
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'role_id' => 1
        // ]);
        $this->call([
            PermissionSeeder::class,
            // Add other seeders here if necessary
        ]);
        // \App\Models\User::factory(10)->create();

    }
}

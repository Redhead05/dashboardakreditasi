<?php

namespace Database\Seeders;

use App\Models\RefProvinsi;
use App\Models\RefTahunAkreditasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        RefTahunAkreditasi::factory()->count(10)->create();
        RefProvinsi::factory()
            ->count(100)
            ->has(RefTahunAkreditasi::factory())
            ->create();
    }
}

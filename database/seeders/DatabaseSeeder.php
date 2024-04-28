<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Area;
use App\Models\Child;
use App\Models\Guard;
use App\Models\Inquiry;
use App\Models\Jacket;
use App\Models\Patron;
use App\Models\SafetyInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Guard::factory(5)->create();
        Inquiry::factory(5)->create();
        Patron::factory(5)->create();
        SafetyInfo::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

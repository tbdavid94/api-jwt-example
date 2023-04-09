<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com'
         ]);

        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com'
        ]);

        User::factory()->create([
            'name' => 'Admin User ',
            'email' => 'admin@example.com',
            'is_admin' => 1
        ]);
    }
}

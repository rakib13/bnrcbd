<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInfo; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserInfo::factory()->create([
        'full_name' => 'Sajedur',
        'user_name' => 'Rahman',
        'email' => 'tareq@example.com',
        'password' => bcrypt('12345'),
        'role' => 'user',
    ]);
     // UserInfo::factory()->count(10)->create(); 
    }
}

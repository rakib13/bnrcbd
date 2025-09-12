<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInfo;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userInfo = new UserInfo;
        $userInfo->full_name = 'Test User';
        $userInfo->user_name = 'testuser';
        $userInfo->email = 'test@example.com';
        $userInfo->password = bcrypt('12345');
        $userInfo->role = 'user';
        $userInfo->is_archive = false;
        $userInfo->save();
    
    }
}

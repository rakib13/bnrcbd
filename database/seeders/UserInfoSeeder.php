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
//        $userInfo = new UserInfo;
//     $userInfo->full_name = $request->full_name ?? 'Test User';
//     $userInfo->user_name = $request->user_name ?? 'testuser';
//     $userInfo->email = $request->email ?? 'test@example.com';
//     $userInfo->password = bcrypt($request->password ?? '12345');
//     $userInfo->role = $request->role ?? 'user';
//   //  $userInfo->is_active = $request->is_active ?? true;
//     $userInfo->is_archive = $request->is_archive ?? false;
//    // $userInfo->is_deleted = $request->is_deleted ?? false;
//     $userInfo->save();
$this->call(UserInfoSeeder::class);

    
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'id', 'full_name', 'user_name', 'email', 'password', 'role', 'is_active', 'is_archive', 'is_deleted'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; //add line tareq


class UserInfo extends Authenticatable //Model change here //add line tareq

{
    //
    use HasFactory;

    protected $fillable = [
        'id',
        'full_name',
        'user_name',
        'email',
        'password',
        'role',
        'is_active',
        'is_archive',
        'is_deleted'
    ];
    // Add these methods to disable remember token functionality ///add line tareq
    public function getRememberToken()
    {
        return null;
    }
    public function setRememberToken($value) {}
    public function getRememberTokenName()
    {
        return '';
    }
}

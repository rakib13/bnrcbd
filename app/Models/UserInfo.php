<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'is_deleted'
    ];

    public function publishListing() : HasMany{
        return $this->hasMany(
            UserInfo::class,
            'user_infos_id'
        );
    }
    
    // Add these methods to disable remember token functionality ///add line tareq
    public function getRememberToken() { return null;}
    public function setRememberToken($value) {}
    public function getRememberTokenName() {return '';}
}

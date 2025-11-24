<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoginVerification extends Model
{
    //
    use HasFactory;
    //
    // protected $fillable = [
    //     'id',
    //     'otp',
    //     'is_verified'
    // ];

    protected $fillable = [
        'user_infos_id',
        'otp',
        'is_verified'
    ];

    public function toUserInfos(): BelongsTo
    {
        return $this->belongsTo(
            UserInfo::class,
            'user_infos_id',
            'id'
        );
    }
}

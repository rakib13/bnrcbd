<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leadership extends Model
{
    
    use HasFactory;
    //
    protected $fillable = [
        'id',
        'book_name',
        'book_title',
        'book_summary',
        'book_author',
        'thumbnail',
        'link',
        'publish_date',
        'tag',
        'is_featured',
        'is_shown',
        'is_deleted'
    ];

    public function toUserInfos(): BelongsTo
    {
        return $this->belongsTo(
            UserInfo::class,
            'userinfos_id',
            'id'
        );
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publish extends Model
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
        'topic',
        'type',
        'category_of_publication',
        'is_visible',
        'is_deleted'
    ];

    public function toUserInfos() : BelongsTo{
        return $this->belongsTo(
            \App\Models\UserInfo::class,
            'userinfos_id'
        );
    }
}

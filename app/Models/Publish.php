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
        'publish-date',
        'topic',
        'type',
        'type_of_publications',
        'is_hidden'
    ];

    public function toUserInfos() : BelongsTo{
        return $this->belongsTo(
            \App\Models\UserInfo::class,
            'userinfos_id'
        );
    }
}

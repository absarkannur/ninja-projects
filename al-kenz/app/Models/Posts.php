<?php

namespace App\Models;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'categories_id',
        'content',
        'tags',
        'published'
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function categories(){
        return $this->belongsTo( Categories::class );
    }

    // public function comments(){
    //     return $this->morphMany(Comments::class,  'commentable');
    // }

}
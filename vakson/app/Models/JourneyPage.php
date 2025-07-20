<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneyPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_video',
        'banner_video_poster',
        'banner_title',
        'banner_sub_title',
        'excellence_title',
        'excellence_desc',
        'excellence',
    ];

    protected $casts = [
        'excellence' => 'array',
    ];

}


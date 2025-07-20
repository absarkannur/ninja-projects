<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_video',
        'banner_video_poster',
        'description',
        'vision',
        'mission',
        'core_values'
    ];

    protected $casts = [
        'core_values' => 'array',
    ];

}


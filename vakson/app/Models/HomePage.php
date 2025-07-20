<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_title',
        'banner_sub_title',
        'banner_url',
        'banner_video',
        'banner_video_poster',

        'about_title',
        'about_sub_title',
        'about_numbers',

        'journey_title',
        'journey_sub_title',
        'journey_desc',

        'footer_video',
        'footer_video_poster',
    ];

    protected $casts = [
        'about_numbers' => 'array',
    ];

}

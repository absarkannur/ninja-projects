<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesList extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_video',
        'banner_video_poster',
        'title',
        'slug',
        'sub_title',
        'description',
        'thumbnail',
        'amenities',
        'video',
        'floor_paln_pdf',
        'image_slider',
        'location_name',
        'location_image',
        'location_description',
        'location_google_map',
        'convenient_location_distance',
        'floor_plans',
        'gallery',
        'status',
        'latest',
        'types',
    ];

    protected $casts = [
        'amenities' => 'array',
        'image_slider' => 'array',
        'convenient_location_distance' => 'array',
        'floor_plans' => 'array',
        'gallery' => 'array'
    ];

}



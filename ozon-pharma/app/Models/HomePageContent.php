<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',

        'page_heading',
        'page_description',
        'page_description_url',

        'page_banner_product_title',
        'page_banner_product_description',
        'page_banner_product_url',

        'page_banner_section_description',
        'page_banner_section_url',

        'page_facilities_section_heading',
        'page_therapeutic_section_heading',
        'page_articles_section_heading',

        'page_abouts_section_content',
        'page_abouts_section_url',

        'page_abouts_section_image',
        'page_abouts_section_image_text',
        'page_abouts_section_video_url'
    ];

}

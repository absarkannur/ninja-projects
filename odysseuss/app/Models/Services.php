<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_slug',
        'service_list_header',
        'service_list_image',
        'service_list_description',
        'service_short_image',
        'service_short_description',
        'service_inner_page'
    ];

}

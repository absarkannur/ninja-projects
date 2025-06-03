<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerWidgets extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_slogan',
        'banner_title',
        'banner_description',
    ];

}

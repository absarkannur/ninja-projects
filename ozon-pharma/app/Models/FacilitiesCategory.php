<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitiesCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_category_name',
        'facility_category_slug',
        'facility_category_description',
        'facility_category_icon',
        'facility_category_image'
    ];

}

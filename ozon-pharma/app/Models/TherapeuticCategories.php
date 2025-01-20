<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapeuticCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'therapeutic_category_name',
        'therapeutic_category_slug',
        'therapeutic_category_image'
    ];

}

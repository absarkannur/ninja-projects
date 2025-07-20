<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneyList extends Model
{
    use HasFactory;

    protected $fillable = [
        'journey_image',
        'journey_year',
        'journey_title',
        'journey_desc',
        'journey_properties',
    ];

    protected $casts = [
        'journey_properties' => 'array',
    ];


}



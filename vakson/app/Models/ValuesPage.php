<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuesPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_image',
        'banner_title',
        'banner_sub_title',
        'values',
    ];

    protected $casts = [
        'values' => 'array',
    ];

}



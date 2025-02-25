<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategyPageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'page_description',
        'page_image',
        'content_1',
        'content_2',
        'content_3'
    ];

}

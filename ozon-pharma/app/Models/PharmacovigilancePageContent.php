<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacovigilancePageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'page_image',
        'page_description',
        'content_1',
        'content_2'
    ];

}

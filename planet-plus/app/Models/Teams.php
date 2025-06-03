<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'employee_image',
        'employee_designation',
        'employee_linkedin',
        'employee_twitter',
        'employee_facebook',
        'employee_instagram',
    ];

}

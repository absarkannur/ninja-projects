<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_address',
        'company_email',
        'company_phone1',
        'company_phone2',
        'company_fb',
        'company_ln',
        'company_in',
        'company_yb',
        'logo',
    ];

}


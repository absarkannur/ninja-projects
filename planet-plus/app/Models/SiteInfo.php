<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'compnay_address',
        'compnay_email',
        'compnay_phone1',
        'compnay_phone2',
        'year_experience',
        'customers',
        'client_satisfaction',
        'established',
        'compnay_fb',
        'compnay_insta',
        'compnay_x',
        'compnay_linkd',
        'header_logo',
        'mobile_header_logo',
        'footer_logo',
    ];

}

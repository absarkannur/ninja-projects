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
        'compnay_phone',
        'compnay_time',
        'compnay_fb',
        'compnay_insta',
        'compnay_linkd',
        'company_logo_header',
        'company_logo_footer'
    ];

}

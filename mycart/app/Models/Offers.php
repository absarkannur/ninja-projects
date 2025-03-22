<?php

namespace App\Models;

use App\Enums\OfferStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_name',
        'offer_discount_percent',
        'offer_end_date',
        'offer_status',
        'offer_description',
    ];

    protected $casts = [
        'offer_status' => OfferStatus::class,
    ];

    protected $dates = [
        'offer_end_date'
    ];

}

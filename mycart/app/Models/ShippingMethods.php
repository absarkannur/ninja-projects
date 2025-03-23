<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethods extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_title',
        'shipping_charge',
        'shipping_description'
    ];

}

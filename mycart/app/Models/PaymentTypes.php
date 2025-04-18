<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_type',
        'payment_type_short',
        'payment_type_visible'
    ];

}
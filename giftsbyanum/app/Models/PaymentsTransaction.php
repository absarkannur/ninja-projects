<?php

namespace App\Models;

use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'orders_id',
        'payment_types_id',
        'transaction_amount',
        'transaction_date',
        'payment_status'
    ];

    protected $casts = [
        'payment_status' => PaymentStatus::class
    ];

    public function orders(){
        return $this->belongsTo( Orders::class );
    }

    public function payment_types(){
        return $this->belongsTo( PaymentTypes::class );
    }

    public function payment_informations(){
        return $this->belongsTo( PaymentInformations::class );
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentTypes;

class PaymentInformations extends Model
{
    use HasFactory;

    protected $fillable = [
        'customers_id',
        'payment_types_id',
        'provider',
        'card_holder_name',
        'card_type',
        'card_no',
        'expiry_month',
        'expiry_year',
    ];

    public function customers(){
        return $this->belongsTo( Customers::class );
    }

    public function payment_types(){
        return $this->belongsTo( PaymentTypes::class );
    }

}

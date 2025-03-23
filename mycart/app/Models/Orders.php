<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customers;
use App\Models\ShippingMethods;
use App\Models\PaymentTypes;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'customers_id',
        'shipping_methods_id',
        'payment_types_id',
        'order_number',
        'order_status',
        'order_date'
    ];

    protected $casts = [
        'order_status' => OrderStatus::class
    ];

    protected $dates = [
        'order_date'
    ];

    public function customers(){
        return $this->belongsTo( Customers::class );
    }

    public function shipping_methods(){
        return $this->belongsTo( ShippingMethods::class );
    }

    public function payment_types(){
        return $this->belongsTo( PaymentTypes::class );
    }



}

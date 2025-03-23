<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'orders_id',
        'products_id',
        'order_qty',
        'order_price',
        'order_discount_percent',
        'order_tax_percent',
        'order_shipping_charge'
    ];

    public function orders(){
        return $this->belongsTo( Orders::class );
    }

    public function products(){
        return $this->belongsTo( Products::class );
    }

}



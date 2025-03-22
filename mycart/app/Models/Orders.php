<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'customers_id',
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

}
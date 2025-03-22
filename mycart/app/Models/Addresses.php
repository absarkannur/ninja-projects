<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;
use App\Models\Countries;

class Addresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'customers_id',
        'countries_id',
        'address_line_1',
        'address_line_2',
        'country',
        'city',
        'postal_code',
        'landmark',
        'phone_number'
    ];

    public function customers(){
        return $this->belongsTo( Customers::class );
    }

    public function countries(){
        return $this->belongsTo( Countries::class );
    }



}
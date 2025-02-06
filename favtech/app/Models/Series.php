<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'brands_id',
        'product_series',
        'product_series_slug'
    ];

    public function brands(){
        return $this->belongsTo( Brands::class );
    }


}

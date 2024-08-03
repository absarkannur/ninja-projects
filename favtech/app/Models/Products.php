<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'brands_id',
        'product_model',
        'product_part_number',
        'product_parts',
        'product_color',
        'product_condition',
        'product_quality',
        'product_image'
    ];

    public function brands(){
        return $this->belongsTo( Brands::class );
    }

}

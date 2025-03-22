<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategories;
use App\Models\Offers;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'brands_id',
        'sub_categories_id',
        'offers_id',
        'product_name',
        'product_slug',
        'product_description',
        'product_content',
        'product_images',
        'product_original_price',
        'product_sales_price',
        'product_qty_in_stock',
        'product_sku',
        'product_status'
    ];

    protected $casts = [
        'product_images' => 'array',
    ];

    public function brands(){
        return $this->belongsTo( Brands::class );
    }
    public function sub_categories(){
        return $this->belongsTo( SubCategories::class );
    }
    public function offers(){
        return $this->belongsTo( Offers::class );
    }

}

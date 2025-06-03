<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'brands_id',
        'sub_categories_id',
        'supports_id',
        'product_name',
        'product_slug',
        'product_item_code',
        'product_model_number',
        'product_short_descriptions',
        'product_descriptions',
        'product_content',
        'product_image',
    ];

    protected $casts = [
        'supports_id' => 'array',
    ];

    public function brands(){
        return $this->belongsTo( Brands::class );
    }

    public function sub_categories(){
        return $this->belongsTo( SubCategories::class );
    }

    public function supports(){
        return $this->belongsTo( Support::class );
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brands;
use App\Models\Colors;
use App\Models\Series;
use App\Models\ScreenTypes;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'brands_id',
        'colors_id',
        'series_id',
        'screen_types_id',
        'product_model',
        'product_class',
        'product_part_number',
        'product_parts',
        'product_condition',
        'product_quality',
        'product_image',
        'product_latest'
    ];

    // protected $casts = [
    //     'colors_id' => 'array',
    // ];

    public function brands(){
        return $this->belongsTo( Brands::class );
    }

    public function colors(){
        return $this->belongsTo( Colors::class );
    }

    public function series(){
        return $this->belongsTo( Series::class );
    }

    public function screen_types(){
        return $this->belongsTo( ScreenTypes::class );
    }

}

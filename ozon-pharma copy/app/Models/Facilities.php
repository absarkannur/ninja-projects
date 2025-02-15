<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FacilitiesCategory;

class Facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'facilities_categories_id',
        'facilities_inner_banner',
        'facilities_content'
    ];

    // public function facilitiesCategory(){
    //     return $this->hasOne( FacilitiesCategory::class );
    // }

    public function facilities_categories(){
        return $this->belongsTo( FacilitiesCategory::class );
    }

}

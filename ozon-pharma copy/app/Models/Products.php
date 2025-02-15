<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TherapeuticCategories;

class Products extends Model
{
    use HasFactory;


    protected $fillable = [
        'therapeutic_categories_id',
        'product_name',
        'product_description',
        'product_image'
    ];

    public function therapeutic_categories(){
        return $this->belongsTo( TherapeuticCategories::class );
    }

}

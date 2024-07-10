<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategories;

class DrugClasses extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_categories_id'
    ];

    public function product_categories(){
        return $this->belongsTo( ProductCategories::class );
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'sub_category_name',
        'sub_category_slug'
    ];

    public function categories(){
        return $this->belongsTo( Categories::class );
    }

}

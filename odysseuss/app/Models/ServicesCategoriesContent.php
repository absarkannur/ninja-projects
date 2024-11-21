<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategoriesContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_categories_id',
        'service_category_contect_image',
        'service_category_contect_description'
    ];

    public function servicesCategories(){
        return $this->belongsTo( ServicesCategories::class );
    }

    protected $casts = [
        'service_category_contect_image' => 'array',
    ];


}

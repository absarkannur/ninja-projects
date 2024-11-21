<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'service_category_name'
    ];

    public function services(){
        return $this->belongsTo( Services::class );
    }

}

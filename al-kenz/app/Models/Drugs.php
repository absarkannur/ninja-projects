<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DrugClasses;

class Drugs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'drug_classes_id',
        'description',
        'attachment',
        'image'
    ];

    public function drug_classes(){
        return $this->belongsTo( DrugClasses::class );
    }

}



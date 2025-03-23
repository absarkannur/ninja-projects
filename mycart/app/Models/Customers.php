<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_password'
    ];

    protected $hidden = [
        'customer_password',
        'remember_token',
    ];

    protected $casts = [
        'customer_email_verified_at' => 'datetime',
        'customer_password' => 'hashed',
    ];

}
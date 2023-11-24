<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_name',
        'seller_tag',
        'slug',
        'seller_image',
        'description',
        'user_input',
    ];
}

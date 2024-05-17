<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'sku',
        'cover_images',
        'images',
        'price',
        'offer_price',
        'tags',
        'rating',
        'suggetion_id',
        'category_id',
        'manufacturer_id',
    ];
}

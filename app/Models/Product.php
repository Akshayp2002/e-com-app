<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'overview',
        'rating',
        'status',
        'category_id',
        'manufacturer_id',
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

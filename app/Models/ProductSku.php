<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    use HasFactory;
    protected $table = 'product_skus';

    protected $fillable = [
        'uuid',
        'product_sku',
        'size',
        'color',
        'quantity',
        'price',
        'offer_price',
        'product_id',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

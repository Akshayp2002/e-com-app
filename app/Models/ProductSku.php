<?php

namespace App\Models;

use BinaryCats\Sku\Concerns\SkuOptions;
use BinaryCats\Sku\HasSku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    use HasFactory, HasSku;
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
    public function skuOptions(): SkuOptions
    {
        return SkuOptions::make()
            ->from(['label', 'size'])
            ->target('product_sku')
            ->using('_')
            ->forceUnique(false)
            ->generateOnCreate(true)
            ->refreshOnUpdate(false);
    }
}

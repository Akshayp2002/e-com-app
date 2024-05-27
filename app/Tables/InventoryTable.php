<?php

namespace App\Tables;

use App\Models\ProductInventory;
use App\Models\ProductSku;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class InventoryTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return ProductSku::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['product_sku', 'price', 'offer_price', 'size', 'quantity'])
            ->column('product_sku', sortable: true)
            ->column('size', sortable: true)
            ->column('color', sortable: true)
            ->column('quantity', label: 'Quantity', sortable: true)
            ->column('price', label: 'Price', sortable: true)
            ->column('offer_price', label: 'Offer Price', sortable: true)
            ->column('actions', sortable: true)
            ->paginate(10);
    }
}

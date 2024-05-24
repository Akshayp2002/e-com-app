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
            ->withGlobalSearch(columns: ['name', 'price', 'offer_price', 'rating', 'sku'])
            ->column('product.name', sortable: true)
            ->column('price', sortable: true)
            ->column('offer_price', sortable: true)
            ->column('product.manufacturer.name', label: 'Manufacturer', sortable: true)
            ->column('quantity', label: 'Quantity', sortable: true)
            ->column('actions', sortable: true)
            ->paginate(10);
    }
}

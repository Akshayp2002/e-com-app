<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InventoryRequest;
use App\Models\Product;
use App\Models\ProductSku;
use App\Tables\InventoryTable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.inventory.index', [
            'inventory' => InventoryTable::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($uuid)
    {
        $inventory = null;;
        return view('admin.inventory.form', compact('inventory', 'uuid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventoryRequest $request)
    {
        $productID               = Product::where('uuid', $request->uuid)->select('id')->first();
        $productSku              = new ProductSku();
        $productSku->product_id  = $productID->id;
        $productSku->uuid        = Str::uuid();
        $productSku->size        = $request->size;
        $productSku->color       = $request->color;
        $productSku->quantity    = $request->quantity;
        $productSku->price       = $request->price;
        $productSku->offer_price = $request->offer_price;
        $productSku->save();
        Toast::success('Product Updated Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ids)
    {
        dd($ids);

        $inventory = null;
        $uuid = $ids['pro'];
        return view('admin.inventory.form', compact('inventory', 'uuid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventoryRequest $request, array $ids)
    {
        dd($ids);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

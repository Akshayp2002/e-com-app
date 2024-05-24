<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetails;
use App\Models\ProductInventory;
use App\Tables\ProductTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => ProductTable::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = null;
        $category = ProductCategory::pluck('name', 'id');
        $manufacturer = Manufacturer::pluck('name', 'id');
        return view('admin.products.form', compact('product', 'category', 'manufacturer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            "uuid"            => Str::uuid(),
            "name"            => $request->name,
            "description"     => $request->description,
            "color"           => $request->color,
            "width"           => $request->width,
            "height"          => $request->height,
            "weight"          => $request->weight,
            "manufacturer_id" => $request->manufacturer_id,
            "tags"            => $request->tags,
            "category_id"     => $request->category_id,
            "price"           => $request->price,
            "offer_price"     => $request->offer_price,
            "cover_image"     => $request->cover_image,
            "image"           => $request->image,
        ]);
        ProductDetails::create([
            "color"      => $request->color,
            "size"       => $request->size,
            "product_id" => $product->id,
        ]);
        ProductInventory::create([
            'quantity'   => $request->quantity,
            "product_id" => $product->id,
        ]);
        Toast::success('Product Created Successfully');
        return to_route('products.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

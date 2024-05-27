<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetails;
use App\Models\ProductInventory;
use App\Tables\InventoryTable;
use App\Tables\ProductTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Str;

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
        // // Handle file uploads for cover_image
        // $coverImagePath = $request->hasFile('cover_image')
        //     ? $request->file('cover_image')->store('public/products')
        //     : null;
        // // Handle file uploads for image
        // $imagePaths = [];
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePaths[] = $image->store('public/products');
        //     }
        // }

        Product::create([
            "uuid"            => Str::uuid(),
            "name"            => $request->name,
            "description"     => $request->description,
            "manufacturer_id" => $request->manufacturer_id,
            "tags"            => $request->tags,
            "category_id"     => $request->category_id,
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
        $product = Product::where('uuid', $id)->first();
        
        $category     = ProductCategory::pluck('name', 'id');
        $manufacturer = Manufacturer::pluck('name', 'id');

        $inventory = new InventoryTable();
        return view('admin.inventory.index', compact('product', 'category', 'manufacturer', 'inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $uuid)
    {
        $product = Product::where('uuid', $uuid)->first();
        // Handle file uploads for cover_image
        // $coverImagePath = null;
        // if ($request->hasFile('cover_image')) {
        //     $coverImagePath = $request->file('cover_image')->store('products', 'public');
        // }

        // // Handle file uploads for image
        // $imagePaths = [];
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePaths[] = $image->store('public/products');
        //     }
        // }

        // Update the product
        $product->update([
            "name"            => $request->name,
            "description"     => $request->description,
            "manufacturer_id" => $request->manufacturer_id,
            "tags"            => $request->tags,
            "category_id"     => $request->category_id,
        ]);
        Toast::success('Product Updated Successfully');
        return \redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}

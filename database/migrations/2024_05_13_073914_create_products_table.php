<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('sku')->nullable();
            $table->float('price')->nullable();
            $table->foreignId('product_categories_id')->nullable()->constrained('product_categories')->onDelete('cascade');
            $table->foreignId('product_inventories_id')->nullable()->constrained('product_inventories')->onDelete('cascade');
            $table->foreignId('product_discounts')->nullable()->constrained('product_discounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

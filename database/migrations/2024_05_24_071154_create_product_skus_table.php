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
        Schema::create('product_skus', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('product_sku')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('price')->nullable();
            $table->float('offer_price')->nullable();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_skus');
    }
};

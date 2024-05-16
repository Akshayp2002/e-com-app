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
            $table->string('images')->nullable();
            $table->float('price')->nullable();
            $table->string('tags')->nullable();
            $table->float('rating')->default('0.0');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('manufacturer_id')->nullable()->constrained('manufacturer')->onDelete('cascade');
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

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
        Schema::create('manufacturer', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('name');
            $table->string('Logo');
            $table->string('description')->nullable();
            $table->string('website')->nullable();
            $table->float('email')->nullable();
            $table->float('phone')->nullable();
            $table->float('policy')->nullable();
            $table->tinyInteger('status')->default(0)->comment('1-Active, 0-InActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};

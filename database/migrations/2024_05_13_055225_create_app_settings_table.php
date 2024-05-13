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
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('title')->nullable();
            $table->string('logo_light')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('copyright')->nullable();
            $table->string('cookie_text')->nullable();
            $table->tinyInteger('enable_cookie')->default(0)->comment('1-enable, 0-disable');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('facbook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('other_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_settings');
    }
};

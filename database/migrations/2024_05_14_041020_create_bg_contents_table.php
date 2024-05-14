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
        Schema::create('bg_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('slider_url')->nullable();
            $table->string('timer_url')->nullable();
            $table->string('timer_text')->nullable();
            $table->string('url')->nullable();
            $table->time('scheduled_at')->nullable();
            $table->tinyInteger('enable_timer')->default(0)->comment('1-enable, 0-disable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bg_contents');
    }
};

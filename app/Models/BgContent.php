<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BgContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'url',
        'slider_url', // Assuming slider_url is an image file
        'timer_url', // Assuming timer_url is an image file
        'enable_timer',
        'scheduled_at',
        'timer_text',
    ];
}

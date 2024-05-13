<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'title',
            'logo_light',
            'fav_icon',
            'copyright',
            'cookie_text',
            'enable_cookie',
            'email',
            'phone',
            'twitter_url',
            'facebook_url',
            'instagram_url',
            'other_url',
        ];
}

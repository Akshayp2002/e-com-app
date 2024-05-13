<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string',
            'logo_light' => 'nullable|image', // Assuming logo_light is an image file
            'fav_icon' => 'nullable|image', // Assuming fav_icon is an image file
            'copyright' => 'nullable|string',
            'cookie_text' => 'nullable|string',
            'enable_cookie' => 'nullable|boolean',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'twitter_url' => 'nullable|url',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'other_url' => 'nullable|url',
        ];
    }
}

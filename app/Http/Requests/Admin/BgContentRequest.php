<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BgContentRequest extends FormRequest
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
            'sub_title' => 'nullable|string',
            'url' => 'nullable|string',
            'slider_url' => 'nullable|image', // Assuming slider_url is an image file
            'timer_url' => 'nullable|image', // Assuming timer_url is an image file
            'enable_timer' => 'nullable|boolean',
            'scheduled_at' => 'nullable|string',
            'timer_text' => 'nullable|string',
        ];
    }
}

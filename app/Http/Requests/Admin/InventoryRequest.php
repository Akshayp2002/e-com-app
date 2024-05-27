<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
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
            'color'       => 'required|string|max:50',
            'width'       => 'nullable|numeric',
            'height'      => 'nullable|numeric',
            'weight'      => 'nullable|numeric',
            'price'       => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0|lt:price',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images'      => 'nullable|array',
            'images.*'    => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'size'        => 'required|string|max:50',
            'quantity'    => 'required|integer|min:0',
        ];
    }
}

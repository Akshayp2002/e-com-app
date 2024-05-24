<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'            => 'required|string|max:255',
            'description'     => 'nullable|string',
            'color'           => 'required|string|max:50',
            'width'           => 'nullable|numeric',
            'height'          => 'nullable|numeric',
            'weight'          => 'nullable|numeric',
            'manufacturer_id' => 'required|exists:manufacturer,id',
            'tags'            => 'nullable',
            'tags.*'          => 'string',
            'category_id'     => 'required|exists:product_categories,id',
            'price'           => 'required|numeric|min:0',
            'offer_price'     => 'nullable|numeric|min:0|lt:price',
            'cover_image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images'           => 'nullable|array',
            'images.*'         => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'size'            => 'nullable|string|max:50',
            'quantity'        => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'            => 'The product name is required.',
            'color.required'           => 'The color field is required.',
            'manufacturer_id.required' => 'The manufacturer ID is required.',
            'manufacturer_id.exists'   => 'The selected manufacturer does not exist.',
            'category_id.required'     => 'The category ID is required.',
            'category_id.exists'       => 'The selected category does not exist.',
            'price.required'           => 'The price is required.',
            'price.numeric'            => 'The price must be a number.',
            'offer_price.lt'           => 'The offer price must be less than the regular price.',
            'cover_image.image'        => 'The cover image must be an image file.',
            'images.*.images'          => 'Each image must be an image file.',
            'quantity.required'        => 'The quantity is required.',
            'quantity.integer'         => 'The quantity must be an integer.',
        ];
    }
}

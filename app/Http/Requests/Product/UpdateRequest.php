<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'id' => 'required|integer',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'number_of_tea_bags' => 'integer',
            'tea_weight' => 'required|numeric',
            'is_published' => 'required|integer',
            'main_image' => 'nullable|image',
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('products.manage');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['sometimes', 'required', 'string', 'exists:categories,id'],
            'brand_id' => ['sometimes', 'required', 'string', 'exists:brands,id'],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'slug' => [
                'sometimes', 'required', 'string', 'max:255', 'alpha_dash',
                Rule::unique('products', 'slug')->ignore($this->route('product')),
            ],
            'sku' => [
                'sometimes', 'required', 'string', 'max:255',
                Rule::unique('products', 'sku')->ignore($this->route('product')),
            ],
            'short_description' => ['sometimes', 'required', 'string', 'max:500'],
            'description' => ['sometimes', 'nullable', 'string'],
            'price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'compare_at_price' => ['sometimes', 'nullable', 'numeric', 'min:0', 'gt:price'],
            'status' => ['sometimes', Rule::in(['draft', 'active', 'archived'])],
            'is_featured' => ['sometimes', 'boolean'],
            'is_flash_deal' => ['sometimes', 'boolean'],
            'flash_deal_ends_at' => ['nullable', 'date', 'required_if:is_flash_deal,true'],
            'meta_title' => ['sometimes', 'nullable', 'string', 'max:255'],
            'meta_description' => ['sometimes', 'nullable', 'string', 'max:255'],
            'specifications' => ['sometimes', 'array'],
            'specifications.*.group' => ['required_with:specifications', 'string', 'max:255'],
            'specifications.*.label' => ['required_with:specifications', 'string', 'max:255'],
            'specifications.*.value' => ['required_with:specifications', 'string', 'max:255'],
        ];
    }
}

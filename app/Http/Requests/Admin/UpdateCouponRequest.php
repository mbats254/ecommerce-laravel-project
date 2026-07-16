<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('marketing.manage');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => [
                'sometimes', 'required', 'string', 'max:255',
                Rule::unique('coupons', 'code')->ignore($this->route('coupon')),
            ],
            'type' => ['sometimes', Rule::in(['percentage', 'fixed'])],
            'value' => ['sometimes', 'numeric', 'min:0'],
            'usage_limit' => ['sometimes', 'nullable', 'integer', 'min:1'],
            'starts_at' => ['sometimes', 'nullable', 'date'],
            'expires_at' => ['sometimes', 'nullable', 'date'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'shippingAddressId' => [
                'required', 'string',
                Rule::exists('addresses', 'id')->where('user_id', $this->user()->id),
            ],
            'deliveryMethod' => ['required', Rule::in(['standard', 'express'])],
            'paymentMethod' => ['required', Rule::in(['mpesa', 'card', 'cash_on_delivery'])],
            'couponCode' => ['nullable', 'string'],
        ];
    }
}

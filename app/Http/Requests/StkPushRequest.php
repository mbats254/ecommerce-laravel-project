<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StkPushRequest extends FormRequest
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
            'orderId' => [
                'required', 'string',
                Rule::exists('orders', 'id')
                    ->where('user_id', $this->user()->id)
                    ->where('payment_method', 'mpesa'),
            ],
            'phone' => ['required', 'string', 'regex:/^2547\d{8}$/'],
        ];
    }
}

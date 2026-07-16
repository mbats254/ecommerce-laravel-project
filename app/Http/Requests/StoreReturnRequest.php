<?php

namespace App\Http\Requests;

use App\Models\Order;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreReturnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $order = Order::query()->where('order_number', $this->route('orderNumber'))->first();

        return $order !== null && $this->user()->can('view', $order);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'orderItemId' => ['required', 'string'],
            'reason' => ['required', 'string', 'max:500'],
        ];
    }
}

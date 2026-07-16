<?php

namespace App\Http\Requests;

use App\Models\Address;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Address::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'label' => ['nullable', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'county' => ['required', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'address_line' => ['required', 'string', 'max:500'],
            'is_default' => ['sometimes', 'boolean'],
        ];
    }
}

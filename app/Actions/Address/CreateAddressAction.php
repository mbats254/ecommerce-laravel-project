<?php

namespace App\Actions\Address;

use App\Models\Address;
use App\Models\User;

class CreateAddressAction
{
    public function __construct(
        private readonly SetDefaultAddressAction $setDefaultAddress,
    ) {}

    /**
     * @param  array{label: ?string, full_name: string, phone: string, county: string, city: ?string, address_line: string, is_default?: bool}  $data
     */
    public function handle(User $user, array $data): Address
    {
        $isFirstAddress = ! $user->addresses()->exists();

        $address = $user->addresses()->create([
            ...$data,
            'is_default' => false,
        ]);

        if ($isFirstAddress || ($data['is_default'] ?? false)) {
            $this->setDefaultAddress->handle($user, $address);
        }

        return $address->refresh();
    }
}

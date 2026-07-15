<?php

namespace App\Actions\Address;

use App\Models\Address;

class UpdateAddressAction
{
    public function __construct(
        private readonly SetDefaultAddressAction $setDefaultAddress,
    ) {}

    /**
     * @param  array{label?: ?string, full_name?: string, phone?: string, county?: string, city?: ?string, address_line?: string, is_default?: bool}  $data
     */
    public function handle(Address $address, array $data): Address
    {
        $wantsDefault = $data['is_default'] ?? false;
        unset($data['is_default']);

        $address->update($data);

        if ($wantsDefault) {
            $this->setDefaultAddress->handle($address->user, $address);
        }

        return $address->refresh();
    }
}

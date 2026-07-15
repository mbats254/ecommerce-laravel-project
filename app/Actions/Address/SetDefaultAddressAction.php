<?php

namespace App\Actions\Address;

use App\Models\Address;
use App\Models\User;

class SetDefaultAddressAction
{
    /**
     * Marks the given address as the user's default, unsetting any other
     * default address. Reused by both address creation and updates so there
     * is exactly one place that enforces "one default address per user".
     */
    public function handle(User $user, Address $address): void
    {
        $user->addresses()
            ->where('id', '!=', $address->id)
            ->where('is_default', true)
            ->update(['is_default' => false]);

        if (! $address->is_default) {
            $address->forceFill(['is_default' => true])->save();
        }
    }
}

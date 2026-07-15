<?php

namespace App\Actions\Auth;

use Illuminate\Support\Facades\Password;

class SendPasswordResetLinkAction
{
    /**
     * @param  array{email: string}  $data
     */
    public function handle(array $data): void
    {
        // The broker's status is intentionally ignored: whether the email
        // exists or not, the response to the client is identical so this
        // endpoint can't be used to enumerate registered accounts.
        Password::sendResetLink($data);
    }
}

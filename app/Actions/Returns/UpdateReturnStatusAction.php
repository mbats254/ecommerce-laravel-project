<?php

namespace App\Actions\Returns;

use App\Enums\ReturnStatus;
use App\Models\ReturnRequest;
use Illuminate\Validation\ValidationException;

class UpdateReturnStatusAction
{
    public function __construct(
        private readonly ProcessRefundAction $processRefund,
    ) {}

    /**
     * Approving a return immediately processes its refund — there is no
     * standalone "approved, not yet refunded" persisted state.
     */
    public function handle(ReturnRequest $return, ReturnStatus $status): ReturnRequest
    {
        if ($return->status !== ReturnStatus::Requested) {
            throw ValidationException::withMessages([
                'status' => ['This return has already been processed.'],
            ]);
        }

        if ($status === ReturnStatus::Approved) {
            return $this->processRefund->handle($return);
        }

        $return->update(['status' => ReturnStatus::Rejected]);

        return $return->refresh();
    }
}

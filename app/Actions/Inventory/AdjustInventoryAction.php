<?php

namespace App\Actions\Inventory;

use App\Models\InventoryItem;
use App\Services\AuditLogger;

class AdjustInventoryAction
{
    public function __construct(
        private readonly AuditLogger $auditLogger,
    ) {}

    public function handle(InventoryItem $item, int $newQuantity, string $reason): InventoryItem
    {
        $previousQuantity = $item->quantity;

        $item->update(['quantity' => $newQuantity]);

        $this->auditLogger->log('inventory.adjusted', $item, [
            'reason' => $reason,
            'quantity' => ['from' => $previousQuantity, 'to' => $newQuantity],
        ]);

        return $item->refresh();
    }
}

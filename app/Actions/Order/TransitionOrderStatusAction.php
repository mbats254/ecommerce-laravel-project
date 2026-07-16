<?php

namespace App\Actions\Order;

use App\Enums\OrderStatus;
use App\Events\OrderStatusChanged;
use App\Exceptions\InvalidOrderTransitionException;
use App\Models\InventoryItem;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

/**
 * The one place an order's status is allowed to change. Enforces the state
 * machine server-side regardless of what the admin UI's dropdown happens to
 * offer — the client is never trusted to only send legal transitions.
 *
 *   pending → processing → packing → shipped → delivered
 *                  ↘                     ↘
 *               cancelled              refunded   (terminal branches)
 */
class TransitionOrderStatusAction
{
    /**
     * @var array<string, array<int, string>>
     */
    private const TRANSITIONS = [
        'pending' => ['processing', 'cancelled'],
        'processing' => ['packing', 'cancelled'],
        'packing' => ['shipped'],
        'shipped' => ['delivered', 'refunded'],
        'delivered' => ['refunded'],
        'cancelled' => [],
        'refunded' => [],
    ];

    public function handle(Order $order, OrderStatus $newStatus, ?string $note = null): Order
    {
        $previousStatus = $order->status;

        if (! in_array($newStatus->value, self::TRANSITIONS[$previousStatus->value], true)) {
            throw InvalidOrderTransitionException::make($previousStatus, $newStatus);
        }

        return DB::transaction(function () use ($order, $newStatus, $previousStatus, $note) {
            // Cancelling restocks the whole order here. Refunding does not:
            // it's only ever reached via ProcessRefundAction, which already
            // restocks each returned item individually as its return is
            // approved — restocking again here would double-count it.
            if ($newStatus === OrderStatus::Cancelled) {
                $order->loadMissing('items');

                foreach ($order->items as $item) {
                    $this->restock($item->product_id, $item->quantity);
                }
            }

            $order->update(['status' => $newStatus]);

            $order->statusHistory()->create([
                'status' => $newStatus,
                'note' => $note,
                'occurred_at' => now(),
            ]);

            $order = $order->fresh(['items', 'shippingAddress', 'statusHistory']);

            event(new OrderStatusChanged($order, $previousStatus));

            return $order;
        });
    }

    /**
     * Inventory is fungible across warehouses for a given product, so
     * restoring to the first row (by the same deterministic order
     * PlaceOrderAction decrements in) is equivalent to reversing the exact
     * original allocation.
     */
    private function restock(string $productId, int $quantity): void
    {
        InventoryItem::query()
            ->where('product_id', $productId)
            ->lockForUpdate()
            ->orderBy('id')
            ->first()
            ?->increment('quantity', $quantity);
    }
}

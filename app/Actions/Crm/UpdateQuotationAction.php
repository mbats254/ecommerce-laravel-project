<?php

namespace App\Actions\Crm;

use App\Models\Product;
use App\Models\Quotation;
use Illuminate\Support\Facades\DB;

class UpdateQuotationAction
{
    /**
     * @param  array{status?: string, valid_until?: ?string, items?: array<int, array{product_id: string, quantity: int}>}  $data
     */
    public function handle(Quotation $quotation, array $data): Quotation
    {
        $items = $data['items'] ?? null;
        unset($data['items']);

        return DB::transaction(function () use ($quotation, $data, $items) {
            $quotation->update($data);

            if ($items !== null) {
                $quotation->items()->delete();

                $total = 0;

                foreach ($items as $line) {
                    $product = Product::findOrFail($line['product_id']);
                    $unitPrice = $product->price;

                    $quotation->items()->create([
                        'product_id' => $product->id,
                        'quantity' => $line['quantity'],
                        'unit_price' => $unitPrice,
                    ]);

                    $total += $unitPrice * $line['quantity'];
                }

                $quotation->update(['total' => $total]);
            }

            return $quotation->refresh();
        });
    }
}

<?php

namespace App\Actions\Crm;

use App\Models\Product;
use App\Models\Quotation;
use Illuminate\Support\Facades\DB;

class CreateQuotationAction
{
    /**
     * @param  array{lead_id?: ?string, customer_id?: ?string, valid_until?: ?string, items: array<int, array{product_id: string, quantity: int}>}  $data
     */
    public function handle(array $data): Quotation
    {
        return DB::transaction(function () use ($data) {
            $quotation = Quotation::create([
                'lead_id' => $data['lead_id'] ?? null,
                'customer_id' => $data['customer_id'] ?? null,
                'valid_until' => $data['valid_until'] ?? null,
            ]);

            $total = 0;

            foreach ($data['items'] as $line) {
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

            return $quotation->refresh();
        });
    }
}

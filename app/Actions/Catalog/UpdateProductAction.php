<?php

namespace App\Actions\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class UpdateProductAction
{
    /**
     * @param  array<string, mixed>  $data
     */
    public function handle(Product $product, array $data): Product
    {
        $specifications = $data['specifications'] ?? null;
        unset($data['specifications']);

        return DB::transaction(function () use ($product, $data, $specifications) {
            $product->update($data);

            if ($specifications !== null) {
                $product->specifications()->delete();

                foreach ($specifications as $position => $specification) {
                    $product->specifications()->create([
                        ...$specification,
                        'position' => $position,
                    ]);
                }
            }

            return $product->refresh();
        });
    }
}

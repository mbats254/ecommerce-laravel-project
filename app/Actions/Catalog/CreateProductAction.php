<?php

namespace App\Actions\Catalog;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CreateProductAction
{
    /**
     * @param  array<string, mixed>  $data
     */
    public function handle(array $data): Product
    {
        $specifications = $data['specifications'] ?? [];
        unset($data['specifications']);

        return DB::transaction(function () use ($data, $specifications) {
            $product = Product::create($data);

            foreach ($specifications as $position => $specification) {
                $product->specifications()->create([
                    ...$specification,
                    'position' => $position,
                ]);
            }

            return $product->refresh();
        });
    }
}

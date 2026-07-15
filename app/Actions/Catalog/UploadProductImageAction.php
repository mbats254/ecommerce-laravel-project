<?php

namespace App\Actions\Catalog;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadProductImageAction
{
    /**
     * @param  array{alt?: ?string, position?: int}  $data
     */
    public function handle(Product $product, UploadedFile $image, array $data = []): ProductImage
    {
        $path = Storage::disk(config('filesystems.default'))->putFile('products', $image);

        return $product->images()->create([
            'path' => $path,
            'alt' => $data['alt'] ?? null,
            'position' => $data['position'] ?? $product->images()->count(),
        ]);
    }
}

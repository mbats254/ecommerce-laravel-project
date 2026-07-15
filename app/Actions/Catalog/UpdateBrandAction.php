<?php

namespace App\Actions\Catalog;

use App\Models\Brand;

class UpdateBrandAction
{
    /**
     * @param  array{name?: string, slug?: string, logo_path?: ?string, is_active?: bool}  $data
     */
    public function handle(Brand $brand, array $data): Brand
    {
        $brand->update($data);

        return $brand->refresh();
    }
}

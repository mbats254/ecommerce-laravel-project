<?php

namespace App\Actions\Catalog;

use App\Models\Brand;

class CreateBrandAction
{
    /**
     * @param  array{name: string, slug: string, logo_path?: ?string, is_active?: bool}  $data
     */
    public function handle(array $data): Brand
    {
        return Brand::create($data);
    }
}

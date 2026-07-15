<?php

namespace App\Actions\Catalog;

use App\Models\Category;

class CreateCategoryAction
{
    /**
     * @param  array{parent_id?: ?string, name: string, slug: string, icon_path?: ?string, position?: int, is_active?: bool}  $data
     */
    public function handle(array $data): Category
    {
        return Category::create($data);
    }
}

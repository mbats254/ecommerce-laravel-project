<?php

namespace App\Actions\Catalog;

use App\Models\Category;

class UpdateCategoryAction
{
    /**
     * @param  array{parent_id?: ?string, name?: string, slug?: string, icon_path?: ?string, position?: int, is_active?: bool}  $data
     */
    public function handle(Category $category, array $data): Category
    {
        $category->update($data);

        return $category->refresh();
    }
}

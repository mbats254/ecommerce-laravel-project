<?php

namespace App\Actions\Inventory;

use App\Models\Warehouse;

class CreateWarehouseAction
{
    /**
     * @param  array{name: string, location: string, manager: string, is_active?: bool}  $data
     */
    public function handle(array $data): Warehouse
    {
        $warehouse = Warehouse::create($data);

        // Refreshed so the DB-level is_active default (when omitted from
        // $data) is reflected in the returned instance, not left null.
        return $warehouse->refresh();
    }
}

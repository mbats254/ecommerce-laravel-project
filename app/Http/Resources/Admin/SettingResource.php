<?php

namespace App\Http\Resources\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Setting */
class SettingResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Setting $setting */
        $setting = $this->resource;

        return [
            'emailOnNewOrder' => $setting->email_on_new_order,
            'smsOnOrderShipped' => $setting->sms_on_order_shipped,
        ];
    }
}

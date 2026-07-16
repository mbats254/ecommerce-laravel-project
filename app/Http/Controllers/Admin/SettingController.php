<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSettingRequest;
use App\Http\Resources\Admin\SettingResource;
use App\Models\Setting;

class SettingController extends Controller
{
    public function show(): SettingResource
    {
        $this->authorize('settings.manage');

        return new SettingResource(Setting::current());
    }

    public function update(UpdateSettingRequest $request): SettingResource
    {
        $setting = Setting::current();

        $setting->update([
            'email_on_new_order' => $request->has('emailOnNewOrder')
                ? $request->boolean('emailOnNewOrder')
                : $setting->email_on_new_order,
            'sms_on_order_shipped' => $request->has('smsOnOrderShipped')
                ? $request->boolean('smsOnOrderShipped')
                : $setting->sms_on_order_shipped,
        ]);

        return new SettingResource($setting->refresh());
    }
}

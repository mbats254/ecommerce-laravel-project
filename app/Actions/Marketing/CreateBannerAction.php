<?php

namespace App\Actions\Marketing;

use App\Models\Banner;

class CreateBannerAction
{
    /**
     * @param  array{title: string, image_path: string, link_url?: ?string, position: string, starts_at?: ?string, expires_at?: ?string, is_active?: bool}  $data
     */
    public function handle(array $data): Banner
    {
        $banner = Banner::create($data);

        // Refreshed so the DB-level is_active default (when omitted from
        // $data) is reflected in the returned instance, not left null.
        return $banner->refresh();
    }
}

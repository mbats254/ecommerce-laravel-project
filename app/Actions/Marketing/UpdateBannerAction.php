<?php

namespace App\Actions\Marketing;

use App\Models\Banner;

class UpdateBannerAction
{
    /**
     * @param  array{title?: string, image_path?: string, link_url?: ?string, position?: string, starts_at?: ?string, expires_at?: ?string, is_active?: bool}  $data
     */
    public function handle(Banner $banner, array $data): Banner
    {
        $banner->update($data);

        return $banner->refresh();
    }
}

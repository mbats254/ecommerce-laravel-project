<?php

namespace App\Actions\Catalog;

use App\Enums\ReviewStatus;
use App\Models\Review;

class ModerateReviewAction
{
    public function handle(Review $review, ReviewStatus $status): Review
    {
        $review->update(['status' => $status]);

        return $review->refresh();
    }
}

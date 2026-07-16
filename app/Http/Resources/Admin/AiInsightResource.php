<?php

namespace App\Http\Resources\Admin;

use App\Models\AiInsight;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin AiInsight */
class AiInsightResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var AiInsight $insight */
        $insight = $this->resource;

        return [
            'id' => $insight->id,
            'title' => $insight->title,
            'description' => $insight->description,
            'impact' => $insight->impact,
            'metricLabel' => $insight->metric_label,
            'metricValue' => $insight->metric_value,
            'createdAt' => $insight->created_at->toIso8601String(),
        ];
    }
}

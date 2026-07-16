<?php

namespace App\Http\Resources\Admin;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Lead */
class LeadResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Lead $lead */
        $lead = $this->resource;

        return [
            'id' => $lead->id,
            'companyName' => $lead->company_name,
            'contactName' => $lead->contact_name,
            'email' => $lead->email,
            'phone' => $lead->phone,
            'source' => $lead->source,
            'status' => $lead->status,
            'assignedTo' => $lead->assigned_to === null ? null : [
                'id' => $lead->assignee->id,
                'name' => $lead->assignee->name,
            ],
            'createdAt' => $lead->created_at->toIso8601String(),
        ];
    }
}

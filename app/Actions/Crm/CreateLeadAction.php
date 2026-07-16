<?php

namespace App\Actions\Crm;

use App\Enums\LeadStatus;
use App\Models\Lead;

class CreateLeadAction
{
    /**
     * @param  array{company_name?: ?string, contact_name: string, email: string, phone: string, source?: ?string, assigned_to?: ?string}  $data
     */
    public function handle(array $data): Lead
    {
        return Lead::create([
            ...$data,
            'status' => LeadStatus::New,
        ]);
    }
}

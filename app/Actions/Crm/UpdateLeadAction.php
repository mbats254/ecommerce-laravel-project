<?php

namespace App\Actions\Crm;

use App\Models\Lead;

class UpdateLeadAction
{
    /**
     * @param  array{company_name?: ?string, contact_name?: string, email?: string, phone?: string, source?: ?string, status?: string, assigned_to?: ?string}  $data
     */
    public function handle(Lead $lead, array $data): Lead
    {
        $lead->update($data);

        return $lead->refresh();
    }
}

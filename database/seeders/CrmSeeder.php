<?php

namespace Database\Seeders;

use App\Enums\LeadStatus;
use App\Enums\QuotationStatus;
use App\Models\Lead;
use App\Models\Product;
use App\Models\Quotation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Runs after UserSeeder (for assigned_to / customer_id) and CatalogSeeder
 * (for quotation line items).
 */
class CrmSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $salesRep = User::query()->role('Sales & Support')->first();
        $products = Product::query()->inRandomOrder()->take(3)->get();

        if ($products->isEmpty()) {
            $this->command->getOutput()->writeln('  <comment>Skipping CrmSeeder — no products found yet.</comment>');

            return;
        }

        $leads = collect([
            ['company_name' => 'Acme Traders Ltd', 'contact_name' => 'Peter Njoroge', 'email' => 'peter@acmetraders.co.ke', 'status' => LeadStatus::New],
            ['company_name' => 'Riverside Electronics', 'contact_name' => 'Susan Kamau', 'email' => 'susan@riverside-electronics.co.ke', 'status' => LeadStatus::Contacted],
            ['company_name' => 'Coast Office Supplies', 'contact_name' => 'Ali Mohamed', 'email' => 'ali@coastoffice.co.ke', 'status' => LeadStatus::Qualified],
            ['company_name' => null, 'contact_name' => 'Faith Wambui', 'email' => 'faith.wambui@example.com', 'status' => LeadStatus::Won],
        ])->map(fn (array $data) => Lead::factory()->create([
            ...$data,
            'source' => 'Website',
            'assigned_to' => $salesRep?->id,
        ]));

        $wonLead = $leads->firstWhere('status', LeadStatus::Won);

        $quotation = Quotation::factory()->create([
            'lead_id' => $wonLead?->id,
            'customer_id' => null,
            'status' => QuotationStatus::Accepted,
            'valid_until' => now()->addDays(14),
        ]);

        $total = 0;

        foreach ($products->take(2) as $product) {
            $quantity = random_int(2, 5);
            $quotation->items()->create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'unit_price' => $product->price,
            ]);
            $total += $product->price * $quantity;
        }

        $quotation->update(['total' => $total]);

        Quotation::factory()->create([
            'lead_id' => $leads->firstWhere('status', LeadStatus::Qualified)?->id,
            'status' => QuotationStatus::Draft,
            'total' => 0,
        ]);
    }
}

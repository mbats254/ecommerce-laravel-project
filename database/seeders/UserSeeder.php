<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * One admin per Spatie role (see RolesAndPermissionsSeeder) plus a handful
 * of ordinary customers with addresses, so every role and the "customer"
 * case (a user with no role at all — see ReportsService::dashboard()'s
 * whereDoesntHave('roles') convention) has at least one login to test with.
 * Every seeded user shares UserFactory's default password ("password").
 */
class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->admin('Anchor Administrator', 'admin@anchor.africa', 'Administrator');
        $this->admin('Catherine Catalog', 'catalog.manager@anchor.africa', 'Catalog Manager');
        $this->admin('Simon Sales', 'sales.support@anchor.africa', 'Sales & Support');
        $this->admin('Mary Marketing', 'marketing@anchor.africa', 'Marketing');

        $customers = collect([
            ['name' => 'Jane Wanjiru', 'email' => 'jane.wanjiru@example.com'],
            ['name' => 'Brian Otieno', 'email' => 'brian.otieno@example.com'],
            ['name' => 'Amina Hassan', 'email' => 'amina.hassan@example.com'],
            ['name' => 'David Mwangi', 'email' => 'david.mwangi@example.com'],
            ['name' => 'Grace Chebet', 'email' => 'grace.chebet@example.com'],
        ])->map(function (array $data) {
            $customer = User::query()->where('email', $data['email'])->first()
                ?? User::factory()->create($data);

            // ->make(['user_id' => ...]) — without the override, make() still
            // resolves AddressFactory's own default user_id => User::factory()
            // relationship (a real INSERT to get an id, even though only the
            // array is used), silently creating an orphan user every run.
            Address::query()->firstOrCreate(
                ['user_id' => $customer->id],
                Address::factory()->default()->make(['user_id' => $customer->id])->toArray()
            );

            return $customer;
        });

        $this->command->getOutput()->writeln(sprintf(
            '  <info>Seeded users:</info> 4 admins (one per role) + %d customers, all password "password".',
            $customers->count()
        ));
    }

    /**
     * Looked up by email first rather than firstOrCreate() — password has
     * no DB default, and firstOrCreate() inserts exactly the attributes
     * given without ever running the factory's definition(), so it would
     * insert a NULL password. Checking first and only falling back to the
     * factory when genuinely missing keeps every column defaulted properly
     * while still being safe to run twice (e.g. a plain `db:seed` on top of
     * an already-seeded database, not just `migrate:fresh --seed`).
     * syncRoles() rather than assignRole() for the same idempotency reason.
     */
    private function admin(string $name, string $email, string $role): void
    {
        $user = User::query()->where('email', $email)->first()
            ?? User::factory()->create(['name' => $name, 'email' => $email]);

        $user->syncRoles([$role]);
    }
}

<?php

namespace App\Console\Commands;

use App\Actions\Checkout\PlaceOrderAction;
use App\Models\Address;
use App\Models\Cart;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use Throwable;

/**
 * A genuine concurrency test, not the sequential-loop proxy Pest is limited
 * to (a single PHP process holds one DB connection, so Pest can only prove
 * the guard is correct when attempts are serialized, not that it survives
 * real simultaneous transactions). This spawns actual sibling OS processes —
 * each a fresh `php artisan` invocation with its own DB connection — so the
 * race condition PlaceOrderAction::decrementStock() guards against
 * (`lockForUpdate()` across concurrent transactions) is exercised for real.
 *
 * Requires MySQL: SQLite serializes all connections through a single
 * writer, which would make the test pass even if the locking were removed.
 */
class LoadTestCheckoutCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'app:load-test-checkout
        {--units=5 : Units of stock to race concurrent checkouts against}
        {--concurrency=25 : Number of simultaneous checkout attempts}
        {--worker-for= : Internal use — runs a single checkout attempt for this user ID and exits}';

    /**
     * @var string
     */
    protected $description = 'Fires genuinely concurrent OS-process checkout attempts against one product to prove the stock guard holds under real concurrent load.';

    public function handle(): int
    {
        if ($workerUserId = $this->option('worker-for')) {
            return $this->runWorker($workerUserId);
        }

        if (app()->environment('production')) {
            $this->error('Refusing to run — this writes disposable users/products/orders and must never target production.');

            return self::FAILURE;
        }

        if (config('database.default') === 'sqlite') {
            $this->error('SQLite serializes all connections through a single writer, which would pass trivially. Point DB_CONNECTION at mysql first.');

            return self::FAILURE;
        }

        $units = (int) $this->option('units');
        $concurrency = (int) $this->option('concurrency');

        $product = Product::factory()->create(['name' => 'Load Test Product '.now()->timestamp]);
        InventoryItem::factory()->for($product)->create(['quantity' => $units]);

        $this->info("Seeding {$concurrency} users, each with a 1-unit cart against {$units} units of stock...");

        $userIds = collect(range(1, $concurrency))->map(function () use ($product) {
            $user = User::factory()->create();
            Address::factory()->for($user)->create();

            $cart = Cart::create(['user_id' => $user->id]);
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
                'unit_price' => $product->price,
            ]);

            return $user->id;
        });

        $this->info("Firing {$concurrency} concurrent checkout attempts...");

        $artisan = base_path('artisan');
        $php = PHP_BINARY;

        $pool = Process::pool(function ($pool) use ($userIds, $php, $artisan) {
            foreach ($userIds as $userId) {
                $pool->command([$php, $artisan, 'app:load-test-checkout', "--worker-for={$userId}"]);
            }
        })->start();

        $results = $pool->wait();

        $succeeded = $results->collect()->filter(fn ($result) => trim($result->output()) === 'success')->count();
        $failed = $concurrency - $succeeded;

        $remaining = InventoryItem::query()->where('product_id', $product->id)->sum('quantity');

        $this->newLine();
        $this->table(
            ['Metric', 'Value'],
            [
                ['Units of stock', $units],
                ['Concurrent attempts', $concurrency],
                ['Succeeded', $succeeded],
                ['Failed', $failed],
                ['Remaining stock', $remaining],
            ]
        );

        if ($succeeded > $units || $remaining < 0) {
            $this->error('OVERSOLD — the concurrency guard failed under real concurrent load.');

            return self::FAILURE;
        }

        $this->info('No overselling: the concurrency guard held under genuine concurrent load.');

        return self::SUCCESS;
    }

    private function runWorker(string $userId): int
    {
        $user = User::query()->findOrFail($userId);
        $cart = Cart::query()->where('user_id', $user->id)->firstOrFail();
        $address = Address::query()->where('user_id', $user->id)->firstOrFail();

        try {
            app(PlaceOrderAction::class)->handle($user, $cart, [
                'shippingAddressId' => $address->id,
                'deliveryMethod' => 'standard',
                'paymentMethod' => 'cash_on_delivery',
            ]);

            $this->output->write('success');

            return self::SUCCESS;
        } catch (Throwable) {
            $this->output->write('failed');

            return self::FAILURE;
        }
    }
}

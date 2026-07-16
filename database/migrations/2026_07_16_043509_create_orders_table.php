<?php

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('order_number')->unique();
            $table->foreignUlid('user_id')->constrained()->restrictOnDelete();
            $table->string('status')->default(OrderStatus::Pending->value);
            $table->decimal('subtotal', 12, 2);
            $table->decimal('delivery_fee', 12, 2);
            $table->decimal('vat', 12, 2);
            $table->decimal('total', 12, 2);
            $table->string('payment_method');
            $table->foreignUlid('shipping_address_id')->constrained('addresses')->restrictOnDelete();
            $table->foreignUlid('coupon_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamp('placed_at');
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

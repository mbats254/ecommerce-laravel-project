<?php

use App\Enums\QuotationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('lead_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignUlid('customer_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status')->default(QuotationStatus::Draft->value);
            $table->decimal('total', 12, 2)->default(0);
            $table->date('valid_until')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};

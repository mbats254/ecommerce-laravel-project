<?php

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
        // Single-row table: only the two notification toggles the plan
        // names explicitly (emailOnNewOrder, smsOnOrderShipped). The full
        // Settings shape isn't specified in api-design.md/database-schema.md
        // — reconcile against the frontend's actual Settings type when
        // available, the same way §0 reconciled other schema gaps.
        Schema::create('settings', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->boolean('email_on_new_order')->default(true);
            $table->boolean('sms_on_order_shipped')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

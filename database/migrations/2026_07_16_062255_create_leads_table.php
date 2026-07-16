<?php

use App\Enums\LeadStatus;
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
        Schema::create('leads', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('company_name')->nullable();
            $table->string('contact_name');
            $table->string('email');
            $table->string('phone');
            $table->string('source')->nullable();
            $table->string('status')->default(LeadStatus::New->value);
            $table->foreignUlid('assigned_to')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('leads');
    }
};

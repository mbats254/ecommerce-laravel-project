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
        // Append-only, matching database-schema.md (no updated_at).
        Schema::create('ai_insights', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('title');
            $table->text('description');
            $table->string('impact');
            $table->string('metric_label');
            $table->string('metric_value');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_insights');
    }
};

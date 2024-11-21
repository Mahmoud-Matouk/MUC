<?php

use App\Enums\LeadStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'leads', callback: function (Blueprint $table) {
            $table->ulid(column: 'id')->primary();

            $table->string('status')->index()->default(LeadStatus::New);
            $table->foreignId(column: 'service_id')->nullable()->constrained(table: 'services')->nullOnDelete();
            $table->foreignId(column: 'category_id')->nullable()->constrained(table: 'categories')->nullOnDelete();

            $table->string(column: 'name')->index();
            $table->string(column: 'mobile_code');
            $table->string(column: 'mobile');
            $table->text(column: 'note')->nullable();

            $table->foreignUlid(column: 'agent_id')->nullable()->constrained(table: 'users')->nullOnDelete();
            $table->foreignUlid(column: 'creator_id')->nullable()->constrained(table: 'users')->nullOnDelete();

            $table->string(column: 'utm_source')->index()->default('website');
            $table->string(column: 'utm_medium')->nullable();
            $table->string(column: 'utm_campaign')->nullable();
            $table->string(column: 'utm_term')->nullable();

            $table->timestamp(column: 'deadline_at')->nullable();
            $table->timestamp(column: 'followed_at')->nullable();

            $table->timestamp(column: 'done_at')->nullable();
            $table->timestamp(column: 'closed_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(table: 'lead_actions', callback: function (Blueprint $table) {
            $table->ulid(column: 'id')->primary();
            $table->foreignUlid(column: 'lead_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid(column: 'agent_id')->nullable()->constrained(table: 'users')->nullOnDelete();

            $table->string(column: 'from_status')->nullable();
            $table->string(column: 'to_status');

            $table->timestamp(column: 'deadline_at')->nullable();
            $table->timestamp(column: 'deadlined_at')->nullable();

            $table->string(column: 'comment')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(table: 'leads');
        Schema::dropIfExists(table: 'lead_actions');
    }
};

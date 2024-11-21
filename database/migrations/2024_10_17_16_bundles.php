<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bundles', function (Blueprint $table) {
            $table->id(column: 'id')->primary();
            $table->json(column: 'name');
            $table->json(column: 'description');
            $table->integer(column: 'original_price')->nullable();
            $table->integer(column: 'discount_percentage')->nullable();
            $table->string(column: 'image');
            $table->boolean('active')->default(false);
            $table->boolean('is_home_service')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('analyses', function (Blueprint $table) {
            $table->id(column: 'id')->primary();
            $table->json(column: 'name');
            $table->json(column: 'description')->nullable();
            $table->integer(column: 'original_price')->nullable();
            $table->integer(column: 'discount_percentage')->nullable();
            $table->string(column: 'image');
            $table->boolean('active')->default(false);
            $table->foreignId(column: 'bundle_id')->nullable()->constrained(table: 'bundles')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bundles');
        Schema::dropIfExists('analyses');
    }
};

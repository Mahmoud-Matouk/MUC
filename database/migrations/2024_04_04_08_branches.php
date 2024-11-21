<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'branches', callback: function (Blueprint $table) {
            $table->ulid(column: 'id')->primary();

            $table->boolean(column: 'visible')->default(value: false);

            $table->json(column: 'name');
            $table->json(column: 'address');

            $table->string(column: 'mobile')->nullable();
            $table->string(column: 'map_url')->nullable();
            $table->string(column: 'image')->nullable();

            $table->unsignedBigInteger(column: 'city_id');

            $table->foreignUlid(column: 'creator_id')->nullable()
                ->constrained(table: 'users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'branches');
    }
};

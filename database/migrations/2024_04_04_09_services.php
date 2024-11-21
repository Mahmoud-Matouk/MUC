<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'categories', callback: function (Blueprint $table) {
            $table->id()->primary();
            $table->json(column: 'name');
            $table->string(column: 'slug');
            $table->json(column: 'description');
            $table->string(column: 'icon');
            $table->boolean(column: 'active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create(table: 'services', callback: function (Blueprint $table) {
            $table->id()->primary();
            $table->json(column: 'name');
            $table->json(column: 'description');
            $table->string(column: 'icon');
            $table->foreignId(column: 'category_id')->nullable()->constrained(table: 'categories')->nullOnDelete();
            $table->boolean(column: 'active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('services');
    }
};

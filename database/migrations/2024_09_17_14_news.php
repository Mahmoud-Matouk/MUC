<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(column: 'id')->primary();

            $table->json(column: 'title');
            $table->string(column: 'slug')->unique()->index();
            $table->json(column: 'content')->nullable();
            $table->json(column: 'description')->nullable();
            $table->string(column: 'image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

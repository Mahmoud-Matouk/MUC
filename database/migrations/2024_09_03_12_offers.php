<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\OfferStatus;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id()->primary();
            $table->json(column: 'name');
            $table->string(column: 'image')->nullable();
            $table->string(column: 'icon')->nullable();
            $table->integer(column: 'original_price')->nullable();
            $table->integer(column: 'new_price')->nullable();
            $table->integer(column: 'discount_percentage')->nullable();
            $table->string(column: 'code')->nullable();
            $table->json(column: 'description')->nullable();
            $table->boolean(column: 'active')->default(false);
            $table->string(column: 'status')->nullable();
            $table->timestamp(column: 'start_date')->nullable();
            $table->timestamp(column: 'expiry_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

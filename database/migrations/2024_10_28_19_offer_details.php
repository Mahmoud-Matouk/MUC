<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offer_details', function (Blueprint $table) {
            $table->id()->index();
            $table->foreignId('offer_id')->nullable()->constrained(table: 'offers')->nullOnDelete();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offer_details');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id(column: 'id')->primary();
            $table->json(column: 'name');
            $table->json(column: 'description');
            $table->string(column: 'logo');
            $table->string(column: 'primary_color');
            $table->string(column: 'secondary_color');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};

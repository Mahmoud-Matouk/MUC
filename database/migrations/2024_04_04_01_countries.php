<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'countries', callback: static function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger(column: 'order')->nullable();

            $table->char(column: 'code', length: 2);
            $table->string(column: 'mobile_code');
            $table->string(column: 'timezone')->nullable();

            $table->char(column: 'currency', length: 3)->index()->nullable();
            $table->string(column: 'flag')->nullable();

            $table->json(column: 'name');
            $table->json(column: 'full_name');
            $table->json(column: 'nationality');

            $table->timestamps();
        });

        Schema::create(table: 'cities', callback: static function (Blueprint $table) {
            $table->id();
            $table->boolean(column: 'active')->default(true);

            $table->string(column: 'code')->unique()->index();
            $table->string(column: 'country_code')->index();

            $table->json(column: 'name');

            $table->timestamps();
        });

        Schema::create(table: 'districts', callback: function (Blueprint $table) {
            $table->id();

            $table->timestamp(column: 'active_at')->useCurrent();

            $table->char(column: 'country_code', length: 2)->index();
            $table->foreignId(column: 'city_id')->constrained();

            $table->json(column: 'name');

            $table->timestamps();
        });
    }
};

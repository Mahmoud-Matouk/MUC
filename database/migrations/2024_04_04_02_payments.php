<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'payments', callback: static function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->char('country_code', 2)->index();
            $table->string('processor')->index();
            $table->string('ip')->nullable();

            $table->string('transaction_id')->nullable();
            $table->string('invoice_id')->nullable();

            $table->string('currency');
            $table->unsignedInteger('amount');
            $table->string('amount_format')->nullable();

            $table->unsignedInteger('fee')->nullable();
            $table->string('fee_format')->nullable();

            $table->string('receipt_src')->nullable();

            $table->string('type')->nullable();
            $table->string('company')->nullable();
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->string('message')->nullable();
            $table->string('transaction_url')->nullable();

            $table->string('description')->nullable();
            $table->json('metadata')->nullable();
            $table->string('reference')->nullable();

            $table->foreignUlid('verifier_id')->nullable();

            $table->timestamps();
            $table->timestamp('verified_at')->nullable();
        });
    }
};

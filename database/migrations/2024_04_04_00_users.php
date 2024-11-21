<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'users', callback: function (Blueprint $table) {
            $table->ulid(column: 'id')->primary();
            $table->unsignedBigInteger('order')->index()->nullable();

            $table->boolean(column: 'active')->default(true);

            $table->string(column: 'name');
            $table->unsignedTinyInteger(column: 'gender')->nullable();

            $table->string(column: 'email')->nullable()->unique();

            $table->string(column: 'mobile_code');
            $table->unsignedBigInteger(column: 'mobile')->unique();
            $table->string(column: 'locale_mobile');

            $table->string(column: 'username')->nullable()->unique();

            $table->string(column: 'password')->nullable();

            $table->string(column: 'avatar')->nullable();

            $table->char(column: 'locale', length: 2)->default(config('app.locale'));

            $table->char(column: 'currency', length: 3)->default(config('app.currency'));

            $table->string(column: 'timezone')->default(config('app.timezone'));

            $table->boolean(column: 'mono')->default(false);
            $table->boolean(column: 'dark')->default(false);

            $table->boolean(column: 'is_admin')->default(false);
            $table->boolean(column: 'is_agent')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->rememberToken();
        });

        Schema::create('agents', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->boolean('active')->index();

            $table->foreignUlid('user_id')->constrained();

            $table->timestamps();
        });

        Schema::create(table: 'notifications', callback: function (Blueprint $table) {
            $table->uuid(column: 'id')->primary();
            $table->string(column: 'type');
            $table->ulidMorphs(name: 'notifiable');
            $table->text(column: 'data');
            $table->timestamp(column: 'read_at')->nullable();
            $table->timestamps();
        });

        Schema::create(table: 'password_reset_tokens', callback: function (Blueprint $table) {
            $table->string(column: 'email')->primary();
            $table->string(column: 'token');
            $table->timestamp(column: 'created_at')->nullable();
        });

        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }
};

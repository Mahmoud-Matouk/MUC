<?php

use App\Enums\PostStatus;
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
        Schema::create(table: 'posts', callback: function (Blueprint $table) {
            $table->ulid(column: 'id')->primary();

            $table->string(column: 'status')->default(PostStatus::Draft);

            $table->string(column: 'title');
            $table->string(column: 'slug')->unique()->index();

            $table->string(column: 'image')->nullable();

            $table->string(column: 'summary');
            $table->text(column: 'content');

            $table->foreignUlid(column: 'author_id')->nullable()
                ->constrained(table: 'users')->nullOnDelete();

            $table->timestamp(column: 'tobe_published_at')->nullable();
            $table->timestamp(column: 'published_at')->nullable();
            $table->timestamp(column: 'hidden_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->string('status')->default(PostStatus::Published);
            $table->string(column: 'slug')->unique()->index();

            $table->foreignUlid(column: 'author_id')->nullable()
                ->constrained(table: 'users')->nullOnDelete();

            $table->timestamp(column: 'tobe_published_at')->nullable();
            $table->timestamp(column: 'published_at')->nullable();
            $table->timestamp(column: 'hidden_at')->nullable();
            $table->timestamp(column: 'deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tag_id');
            $table->foreignUlid('post_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'posts');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_tag');
    }
};

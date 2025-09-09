<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->uuid('blogger_id');
            $table->string('category_id')->references('id')->on('categories');
            $table->boolean('protected')->default(false);
            $table->string('title');
            $table->string('slug');
            $table->JSON('tags')->nullable();
            $table->string('markdown_used')->default('code');
            $table->Enum('format', ['text', 'image', 'video', 'mixed'])->default('mixed');
            $table->boolean('forked')->default(false);
            $table->string('forked_from')->default(false);
            $table->string('forked_from_site')->default(false);
            $table->string('extract')->nullable();
            $table->string('content')->nullable(false);
            $table->string('theme')->nullable();
            $table->string('ai_summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

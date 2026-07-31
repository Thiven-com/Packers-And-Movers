<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // Basic content
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();

            // Image
            $table->string('image')->nullable();
            $table->string('banner')->nullable();

            // Features
            $table->string('feature_1')->nullable();
            $table->string('feature_2')->nullable();
            $table->string('feature_3')->nullable();
            $table->string('feature_4')->nullable();

            // Extra fields
            $table->string('slug')->nullable();
            $table->enum('status', ['show', 'hide'])->default('show');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

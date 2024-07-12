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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->string('hierarchy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};


$table->string('thumbnail')->nullable();
            
            $table->string('slug')->unique();
            $table->foreignId('categories_id')->constrained()->cascadeOnDelete();
            $table->text('content')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('published')->default(false);
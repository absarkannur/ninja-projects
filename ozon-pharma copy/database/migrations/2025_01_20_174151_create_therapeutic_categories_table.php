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
        Schema::create('therapeutic_categories', function (Blueprint $table) {
            $table->id();
            $table->string('therapeutic_category_name');
            $table->string('therapeutic_category_slug');
            $table->string('therapeutic_category_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapeutic_categories');
    }
};

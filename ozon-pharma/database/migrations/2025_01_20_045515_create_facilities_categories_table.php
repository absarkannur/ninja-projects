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
        Schema::create('facilities_categories', function (Blueprint $table) {
            $table->id();
            $table->string('facility_category_name');
            $table->string('facility_category_slug');
            $table->string('facility_category_description')->nullable();
            $table->string('facility_category_icon')->nullable();
            $table->string('facility_category_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities_categories');
    }
};

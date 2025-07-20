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
        Schema::create('properties_lists', function (Blueprint $table) {
            $table->id();
            $table->string('banner_video')->nullable();
            $table->string('banner_video_poster')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('amenities')->nullable();
            $table->string('video')->nullable();
            $table->string('floor_paln_pdf')->nullable();
            $table->longText('image_slider')->nullable();
            $table->string('location_name')->nullable();
            $table->string('location_image')->nullable();
            $table->string('location_description')->nullable();
            $table->longText('convenient_location_distance')->nullable();
            $table->longText('floor_plans')->nullable();
            $table->longText('gallery')->nullable();
            $table->string('status')->nullable();
            $table->boolean('latest')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_lists');
    }
};

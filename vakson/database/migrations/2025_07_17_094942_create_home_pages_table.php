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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title')->nullable();
            $table->string('banner_sub_title')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('banner_video')->nullable();
            $table->string('banner_video_poster')->nullable();

            $table->string('about_title')->nullable();
            $table->string('about_sub_title')->nullable();
            $table->longText('about_numbers')->nullable();

            $table->string('journey_title')->nullable();
            $table->string('journey_sub_title')->nullable();
            $table->longText('journey_desc')->nullable();

            $table->longText('footer_video')->nullable();
            $table->longText('footer_video_poster')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};

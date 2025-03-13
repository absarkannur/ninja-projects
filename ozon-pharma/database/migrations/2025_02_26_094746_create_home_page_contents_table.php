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
        Schema::create('home_page_contents', function (Blueprint $table) {
            $table->id();

            $table->string('page_title');

            $table->text('page_heading')->nullable();
            $table->text('page_description')->nullable();
            $table->string('page_description_url')->nullable();

            $table->string('page_banner_product_title')->nullable();
            $table->text('page_banner_product_description')->nullable();
            $table->string('page_banner_product_url')->nullable();

            $table->text('page_banner_section_description')->nullable();
            $table->string('page_banner_section_url')->nullable();

            $table->string('page_facilities_section_heading')->nullable();
            $table->string('page_therapeutic_section_heading')->nullable();
            $table->string('page_articles_section_heading')->nullable();


            $table->longtext('page_abouts_section_content')->nullable();
            $table->string('page_abouts_section_url')->nullable();
            $table->string('page_abouts_section_image')->nullable();
            $table->string('page_abouts_section_image_text')->nullable();
            $table->string('page_abouts_section_video_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_contents');
    }
};

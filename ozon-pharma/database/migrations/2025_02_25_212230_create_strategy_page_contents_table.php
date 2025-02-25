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
        Schema::create('strategy_page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_image');
            $table->text('page_description')->nullable();
            $table->longtext('content_1')->nullable();
            $table->longtext('content_2')->nullable();
            $table->longtext('content_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strategy_page_contents');
    }
};

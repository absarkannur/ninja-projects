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
        Schema::create('banner_widgets', function (Blueprint $table) {
            $table->id();
            $table->string('banner_slogan')->nullable();;
            $table->string('banner_title')->nullable();;
            $table->longtext('banner_description')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_widgets');
    }
};

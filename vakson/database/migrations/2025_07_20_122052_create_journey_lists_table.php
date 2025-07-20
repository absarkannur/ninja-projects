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
        Schema::create('journey_lists', function (Blueprint $table) {
            $table->id();
            $table->string('journey_image')->nullable();
            $table->string('journey_year')->nullable();
            $table->string('journey_title')->nullable();
            $table->string('journey_desc')->nullable();
            $table->longText('journey_properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journey_lists');
    }
};

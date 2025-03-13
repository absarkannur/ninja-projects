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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brands_id')->constrained()->cascadeOnDelete();
            $table->foreignId('colors_id')->constrained()->cascadeOnDelete();
            $table->foreignId('series_id')->constrained()->cascadeOnDelete();
            $table->foreignId('screen_types_id')->constrained()->cascadeOnDelete();
            $table->string('product_name');
            $table->string('product_model')->nullable();
            $table->string('product_class')->nullable();
            $table->string('product_part_number');
            $table->string('product_parts')->nullable();
            $table->text('product_description')->nullable();
            $table->string('product_condition')->nullable();
            $table->string('product_quality')->nullable();
            $table->string('product_image')->nullable();
            $table->double('product_price_aed');
            $table->double('product_price_usd');
            $table->boolean('product_latest')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

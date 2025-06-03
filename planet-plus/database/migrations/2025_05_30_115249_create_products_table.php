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
            $table->foreignId('sub_categories_id')->constrained()->cascadeOnDelete();
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_item_code')->nullable();
            $table->string('product_model_number')->nullable();
            $table->longText('product_short_descriptions')->nullable();
            $table->longText('product_descriptions')->nullable();
            $table->longText('product_content')->nullable();
            $table->string('product_image')->nullable();
            $table->string('supports_id')->nullable();
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

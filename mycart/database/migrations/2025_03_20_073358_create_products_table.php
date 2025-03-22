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
            $table->foreignId('offers_id')->nullable()->constrained()->cascadeOnDelete();
            // Tax

            $table->string('product_name');
            $table->string('product_slug');
            $table->longtext('product_description')->nullable();
            $table->longtext('product_content')->nullable();

            $table->string('product_images')->nullable();
            $table->double('product_original_price')->nullable();
            $table->double('product_sales_price')->nullable();
            $table->double('product_qty_in_stock')->nullable();
            $table->string('product_sku')->nullable();
            $table->boolean('product_status')->default(0);



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

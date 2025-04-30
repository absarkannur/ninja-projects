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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders_id')->constrained()->cascadeOnDelete();
            $table->foreignId('products_id')->constrained()->cascadeOnDelete();
            $table->integer('order_qty')->default(0);
            $table->double('order_price')->default(0);
            $table->double('order_discount_percent')->default(0);
            $table->double('order_tax_percent')->default(0);
            $table->double('order_shipping_charge')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

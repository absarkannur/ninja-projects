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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('customers_id')->constrained()->cascadeOnDelete();
            $table->foreignId('shipping_methods_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('payment_types_id')->constrained()->cascadeOnDelete();
            $table->foreignId('addresses_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('order_status')->nullable();
            $table->date('order_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

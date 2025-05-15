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
        Schema::create('payments_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->foreignId('orders_id')->constrained()->cascadeOnDelete();
            $table->foreignId('payment_types_id')->constrained()->cascadeOnDelete();
            $table->double('transaction_amount')->default(0);
            $table->date('transaction_date');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_transactions');
    }
};

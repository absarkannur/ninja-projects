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
        Schema::create('payment_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')->constrained()->cascadeOnDelete();
            $table->foreignId('payment_types_id')->constrained()->cascadeOnDelete();
            $table->string('provider')->nullable();
            $table->string('card_no')->nullable();
            $table->string('expiry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_information');
    }
};

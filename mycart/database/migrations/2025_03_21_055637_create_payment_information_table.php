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
        Schema::create('payment_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id')->constrained()->cascadeOnDelete();
            $table->foreignId('payment_types_id')->constrained()->cascadeOnDelete();
            $table->string('provider')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_no')->nullable();
            $table->string('expiry_month')->nullable();
            $table->string('expiry_year')->nullable();
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

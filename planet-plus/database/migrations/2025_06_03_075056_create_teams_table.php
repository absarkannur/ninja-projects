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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_image')->nullable();
            $table->string('employee_designation')->nullable();
            $table->string('employee_linkedin')->nullable();
            $table->string('employee_twitter')->nullable();
            $table->string('employee_facebook')->nullable();
            $table->string('employee_instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

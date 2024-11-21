<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_slug');
            $table->string('service_list_header');
            $table->string('service_list_image')->nullable();
            $table->longText('service_list_description')->nullable();
            $table->longText('service_short_description')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

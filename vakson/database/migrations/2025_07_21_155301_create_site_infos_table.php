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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone1')->nullable();
            $table->string('company_phone2')->nullable();

            $table->string('company_fb')->nullable();
            $table->string('company_ln')->nullable();
            $table->string('company_in')->nullable();
            $table->string('company_yb')->nullable();

            $table->string('logo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};

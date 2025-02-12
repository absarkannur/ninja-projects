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
            $table->string('compnay_address')->nullable();
            $table->string('compnay_email')->nullable();
            $table->string('compnay_phone')->nullable();
            $table->string('compnay_time')->nullable();
            $table->string('compnay_fb')->nullable();
            $table->string('compnay_insta')->nullable();
            $table->string('compnay_linkd')->nullable();
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

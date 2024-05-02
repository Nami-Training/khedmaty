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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name');
            $table->string('location');
            $table->string('currency');
            $table->string('email');
            $table->string('phone');
            $table->string('other_phone');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('logo_header');
            $table->string('logo_footer');
            $table->string('favicon');
            $table->string('aboutus_image');
            $table->text('terms_conditions');
            $table->text('privacy');
            $table->text('about_app');
            $table->text('footer_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

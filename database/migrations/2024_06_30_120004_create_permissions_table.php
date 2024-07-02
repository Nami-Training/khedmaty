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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('users')->default(0);
            $table->integer('banners')->default(0);
            $table->integer('store_categories')->default(0);
            $table->integer('departments')->default(0);
            $table->integer('categories')->default(0);
            $table->integer('brands')->default(0);
            $table->integer('cars')->default(0);
            $table->integer('stores')->default(0);
            $table->integer('clients')->default(0);
            $table->integer('products')->default(0);
            $table->integer('orders')->default(0);
            $table->integer('faqs')->default(0);
            $table->integer('testimonials')->default(0);
            $table->integer('blogs')->default(0);
            $table->integer('settings')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};

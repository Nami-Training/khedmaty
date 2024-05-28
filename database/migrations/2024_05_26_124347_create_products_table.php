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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('code');
            $table->integer('price');
            $table->enum('type', ['0', '1']);;
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('store_id')->references('id')->on('stores');
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->foreignId('offer_id')->references('id')->on('offers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

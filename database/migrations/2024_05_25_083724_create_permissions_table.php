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
            $table->integer('clients_create')->default(0);
            $table->integer('clients_read')->default(0);
            $table->integer('clients_update')->default(0);
            $table->integer('clients_delete')->default(0);
            $table->integer('settings_create')->default(0);
            $table->integer('settings_read')->default(0);
            $table->integer('settings_update')->default(0);
            $table->integer('settings_delete')->default(0);
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

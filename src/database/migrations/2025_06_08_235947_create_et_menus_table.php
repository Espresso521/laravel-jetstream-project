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
        Schema::create('ET_MENU', function (Blueprint $table) {
            $table->integer('MENU_ID')->primary();
            $table->string('MENU_NAME', 40)->nullable();
            $table->string('CAPTION', 50)->nullable();
            $table->string('COLOR_CHANGE_FLG', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ET_MENU');
    }
};

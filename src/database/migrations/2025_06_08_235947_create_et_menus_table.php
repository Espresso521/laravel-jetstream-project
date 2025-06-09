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
            $table->integer('MENUID')->primary();    // メニューId
            $table->string('MENUNAME', 40)->nullable();  // メニュー名称
            $table->string('CAPTION', 50)->nullable();   // 説明文
            $table->string('COLORCHANGEFLG', 1)->nullable();  // 色変更フラグ
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

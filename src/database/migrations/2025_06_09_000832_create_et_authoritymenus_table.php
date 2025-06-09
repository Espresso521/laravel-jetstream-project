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
        Schema::create('ET_AUTHORITYMENU', function (Blueprint $table) {
            $table->integer('AUTHORITYID'); // ユーザ権限Id
            $table->integer('MENUID');     // メニューId
            $table->integer('SUBMENUID');  // サブメニューId

            // 複合主キー
            $table->primary(['AUTHORITYID', 'MENUID', 'SUBMENUID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ET_AUTHORITYMENU');
    }
};

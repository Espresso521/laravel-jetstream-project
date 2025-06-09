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
        Schema::create('ET_SUBMENU', function (Blueprint $table) {
            $table->integer('MENUID');   // メニューID
            $table->integer('SUBMENUID'); // サブメニューID
            $table->string('SUBMENUNAME', 40)->nullable(); // サブメニュー名称
            $table->string('PROGRAMNAME', 100)->nullable(); // 実行プログラム名 (.exe, .dll など拡張子まで記載)
            $table->string('PARAM', 100)->nullable(); // 引数
            $table->string('SCREENNAME', 100)->nullable(); // 表示画面ID
            $table->string('CAPTION', 200)->nullable(); // 説明文
            $table->string('EXCLUSIVELEVEL', 1)->nullable(); // 排他レベル
            $table->string('EXCLUSIVEGROUP', 1)->nullable(); // 排他グループ

            // 複合主キー
            $table->primary(['MENUID', 'SUBMENUID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ET_SUBMENU');
    }
};

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
        Schema::create('ET_USER_V2', function (Blueprint $table) {
            $table->string('CHARGEID', 20)->primary();  // 主键
            $table->string('CHARGE', 100)->nullable();
            $table->string('USERNAME', 100)->nullable();
            $table->string('PASS', 10)->nullable();
            $table->integer('DISPTYPE')->nullable();
            $table->integer('AUTHORITY')->nullable();
            $table->string('AUTHORITYSUB', 2)->nullable();
            $table->string('JUDGEMENTAREA', 2)->nullable();
            $table->integer('SUPERUSER')->nullable();
            $table->dateTime('UPDATETIME')->nullable();
            $table->string('UPDATEUSER', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ET_USER_V2');
    }
};

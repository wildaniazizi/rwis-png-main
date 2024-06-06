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
        Schema::create('users', function (Blueprint $table) {
            $table->id("user_id");
            $table->string('name', 100);
            $table->string('username', 20)->unique();
            $table->string('password', 255);
            $table->unsignedBigInteger('level_id')->index();
            $table->string('email', 100);
            $table->rememberToken();
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table->foreign('level_id')->references('user_level_id')->on('user_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

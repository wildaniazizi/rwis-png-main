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
        Schema::create('payment_proves', function (Blueprint $table) {
            $table->id('payment_prove_id');
            $table->unsignedBigInteger('payment_id')->index();
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_proves');
    }
};

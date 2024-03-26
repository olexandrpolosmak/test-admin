<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_cards', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->uuid('user_id');
            $table->string('card_number', 16);
            $table->string('card_holder');
            $table->string('expiration_date', 7);
            $table->string('cvv', 3);
            $table->string('brand');
            $table->string('last_four', 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_cards');
    }
};

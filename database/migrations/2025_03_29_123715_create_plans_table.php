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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Basic, Pro, etc.
            $table->string('slug')->unique(); // 'basic', 'pro'
            $table->string('stripe_price_id'); // De prijs-ID van Stripe
            $table->decimal('price', 8, 2);
            $table->text('features')->nullable(); // JSON of tekst
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};

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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->unsignedBigInteger('id_seller');
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_buyer');
            $table->string('transaction_proof');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->timestamps();

            $table->foreign('id_order')->references('id_order')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

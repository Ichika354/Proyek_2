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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_address');
            $table->integer('qty');
            $table->bigInteger('total_price');
            $table->enum('status', ['Unpaid', 'Paid']);
            $table->timestamps();
            
            $table->foreign('id_user')->references('id_user')->on('addresses');
            $table->foreign('id_address')->references('id_address')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

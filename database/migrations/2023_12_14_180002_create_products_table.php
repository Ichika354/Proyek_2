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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_category');
            $table->string('produkName');
            $table->double('price');
            $table->string('photo');
            $table->integer('stock');
            $table->text('detail');
            $table->timestamps();


            $table->foreign('id_category')->references('id_category')->on('categories');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

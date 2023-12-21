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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('id_address');
            $table->unsignedBigInteger('id_user');
            $table->char('province_id');
            $table->char('regency_id');
            $table->char('district_id');
            $table->char('village_id');
            $table->text('patokan');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('regency_id')->references('id')->on('regencies');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('village_id')->references('id')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

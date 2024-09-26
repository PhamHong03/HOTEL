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
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->integer('room_id');
            $table->string('address');
            $table->string('arrival');
            $table->string('departure');
            $table->string('time_checkin');
            $table->string('time_checkout');
            $table->integer('quantity_room');
            $table->integer('price_amenity');
            $table->string('amenities');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')
                ->on('customers')
                ->onDelete('cascade');
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

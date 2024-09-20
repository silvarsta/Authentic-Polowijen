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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->decimal('price', 15, 2);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('full_name');
            $table->text('address');
            $table->string('phone_number');
            $table->text('note')->nullable();
            $table->decimal('total_price', 15, 2);
            $table->decimal('jumlah_transfer', 15, 2);
            $table->string('transfer_melalui');
            $table->string('bukti_pembayaran');
            $table->string('status')->default('pending'); // Default status pesanan adalah pending
            $table->string('confirmation_status')->default('pending'); // pending, verified, rejected
            $table->timestamps();
        
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('orders');
    }
};

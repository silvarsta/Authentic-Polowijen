<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bayar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('full_name');
            $table->string('address');
            $table->string('phone_number');
            $table->decimal('total_price', 10, 2);
            $table->string('transfer_melalui')->default();
            $table->string('bukti_pembayaran')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // Anda dapat mengganti 'products' dengan nama tabel produk yang sesuai
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayar');
    }
};

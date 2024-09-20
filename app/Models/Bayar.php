<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    protected $table = 'bayar'; // Menentukan nama tabel
    protected $fillable = [
        'product_id', 'full_name', 'address', 'phone_number', 'total_price', 'transfer_method', 'bukti_pembayaran', 'note'
    ];

    // Definisikan relasi dengan model produk jika diperlukan
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

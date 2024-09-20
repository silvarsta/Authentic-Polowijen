<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'qty',
        'price',
        // Tambahkan atribut lain yang diperlukan di sini seperti session_id, created_at, updated_at
    ];

    // Relasi dengan produk jika diperlukan
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

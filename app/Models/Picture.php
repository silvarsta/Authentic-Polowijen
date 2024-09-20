<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'path',
    ];

    /**
     * Get the product that owns the picture.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

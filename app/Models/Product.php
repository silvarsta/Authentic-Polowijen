<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture',
        'price',
        'stock',
        'category_id',
        'category',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function carts(){
        return $this->belongsToMany(Carts::class);
    }

    public function picture()
    {
        return $this->hasOne(Picture::class, 'product_id');
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\CategoryFactory::new();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
        // return $this->hasMany(Product::class, 'category_id');

        // return $this->belongsToMany('Modules\Shop\Entities\Product', 'product_category', 'product_id', 'category_id');
    }
}

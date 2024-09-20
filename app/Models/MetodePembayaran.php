<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    protected $table = 'metode_pembayaran';

    // The attributes that are mass assignable.
    protected $fillable = ['id', 'metode_pembayaran', 'active'];

}

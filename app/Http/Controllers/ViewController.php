<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Bayar;
use App\Models\Galeri;
use App\Models\Product;

class ViewController extends Controller
{
    public function home()
    {
        $jumlahProduk = Product::count();
        $jumlahPesanan = Bayar::count();
        $jumlahArtikel = Artikel::count();
        $jumlahGaleri = Galeri::count();
    
        return view("home.home", compact('jumlahProduk', 'jumlahPesanan', 'jumlahArtikel', 'jumlahGaleri'));
    }
    
    public function about()
    {
        return view("home.about");
    }
}

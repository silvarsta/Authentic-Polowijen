<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $artikel = Artikel::all(); 

        return view('home.blog.blog', compact('artikel'));
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        
        return view('home.blog.blog1', compact('artikel'));
    }
}

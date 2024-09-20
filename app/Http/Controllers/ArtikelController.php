<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ArtikelController extends Controller
{
    public function adminArtikel()
    {
        $artikel = Artikel::all(); // Mengambil semua data Artikel dari database

        return view('admin.artikel', compact('artikel')); // Mengirim data artikel ke tampilan 'admin.artikel'

    }

    public function destroy($id)
    {
        // Find the resource by its ID
        $artikel = Artikel::findOrFail($id);

        // Delete the resource
        $artikel->delete();

        // Redirect or provide a response as needed
        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function tambahArtikel(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:255',
            'penjelasan' => 'required|string',
            // 'timestamp' => 'required|string',
        ]);

        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        Artikel::create([
            'gambar' => $imageName, // Simpan nama file gambar, bukan blob
            'judul' => $request->judul,
            'penjelasan' => $request->penjelasan,
            // 'timestamps' => $request->timestamp,
        ]);

        return redirect()->back()->with('success','Artikel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan data artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Tampilkan halaman edit dengan data yang akan diedit
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diinput
        $request->validate([
            'judul' => 'required',
            'penjelasan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk file gambar
        ]);

        // Temukan data artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Update data artikel dengan data yang baru
        $artikel->judul = $request->judul;
        $artikel->penjelasan = $request->penjelasan;

        if ($request->hasFile('gambar')) {
            // Ambil file gambar yang diunggah
            $gambar = $request->file('gambar');

            // Ubah gambar menjadi blob
            $imageName = time().'.'.$gambar->extension();
            $gambar->move(public_path('images'), $imageName);

            // Simpan gambar sebagai blob di dalam kolom gambar di tabel artikel
            $artikel->gambar = $imageName;
        }

        // Simpan perubahan pada data artikel
        $artikel->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data artikel berhasil diperbarui');
    }

    public function user($page = null)
    {    
        $artikel = Artikel::all(); 
    
        return view('home.blog.blog', compact('artikel'));    
        $artikel = Artikel::all(); // Mengambil semua data Artikel dari database
    }

}

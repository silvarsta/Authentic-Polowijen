<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Galeri;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class GaleriController extends Controller
{
    public function galeri()
    {
    $galeri = Galeri::all();
    return view('home.galeri.galeri', ['galeri' => $galeri]);
    }

    public function adminGaleri()
    {
        $galeri = Galeri::all(); // Mengambil semua data galeri dari database
        return view('admin.galeri', compact('galeri')); // Mengirim data galeri ke tampilan 'admin.galeri'
    }

    public function destroy($id)
    {
        // Find the resource by its ID
        $galeri = Galeri::findOrFail($id);

        // Delete the resource
        $galeri->delete();

        // Redirect or provide a response as needed
        return redirect()->back()->with('success', 'Galeri berhasil dihapus');
    }

    public function tambahGaleri(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            // 'timestamp' => 'required|string',
        ]);

        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);

        // Simpan data ke database
        Galeri::create([
            'gambar' => $imageName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            // 'timestamps' => $request->timestamp,
        ]);

        return redirect()->back()->with('success','Galeri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan data galeri berdasarkan ID
        $galeri = Galeri::findOrFail($id);

        // Tampilkan halaman edit dengan data yang akan diedit
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diinput
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk file gambar
        ]);

        // Temukan data galeri berdasarkan ID
        $galeri = Galeri::findOrFail($id);

        // Update data galeri dengan data yang baru
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Ambil file gambar yang diunggah
            $gambar = $request->file('gambar');

            // Ubah gambar menjadi blob
            $gambarBlob = file_get_contents($gambar->getRealPath());

            // Simpan gambar sebagai blob di dalam kolom gambar di tabel galeri
            $galeri->gambar = $gambarBlob;
        }

        // Simpan perubahan pada data galeri
        $galeri->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data galeri berhasil diperbarui');
    }

    public function user($page = null)
    {
        // $galeri = Galeri::all(); // Mengambil semua data galeri dari database
        // Jumlah galeri per halaman

        $galeri = Galeri::all();

        if ($page == 2) {
            return view('home.galeri.galeri2', compact('galeri'));
        } elseif ($page == 3) {
            return view('home.galeri.galeri3', compact('galeri'));
        } else {
            return view('home.galeri.galeri', compact('galeri'));
        }
    }
}

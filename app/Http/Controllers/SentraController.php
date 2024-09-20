<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SentraController extends Controller
{
    public function sentra($page = null)
    {
        $data =
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Product::all()
        ];

        return view('home.sentra.sentra', $data);
        
    }
    public function kegiatan($page = null) {
        $data =
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Product::all()
        ];
        return view('home.sentra.sentra1', $data);
    }

    public function produk($page = null) {
        $data =
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Product::all()
        ];
        return view('home.sentra.sentra2', $data);
    }

    public function bayar($page, $productName)
    {
        return view('home.sentra.form-bayar', ['productName' => $productName]);
    }

    // Nyambung ke admin
    public function adminPembayaran()
    {
        return view('admin.verifikasiBayar');
    }

    public function adminSentra()
    {
        $categories = Category::all();
        $data =
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Product::all()
        ];
        return view('admin.sentra', compact('categories'), $data);
    }

    public function tambahSentra(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description',
            'picture' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
        ];

        // Simpan gambar ke direktori tertentu
        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images/product'), $imageName);

        // Simpan data ke database
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'picture' => $imageName,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,

            'category_id' => $request->category,
        ]);
        return redirect()->back()->with('success','Galeri berhasil ditambahkan.');
    }

    public function deleteSentra($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product berhasil dihapus');
    }

    public function editSentra($id)
    {
        $product = Product::findOrFail($id);

        return view('editSentra', compact('galeri'));
    }

    public function updateSentra(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description',
            'picture' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category = $request->category;
        $product->description = $request->description;

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureBlob = file_get_contents($picture->getRealPath());
            $product->picture = $pictureBlob;
        }
        $product->save();
        return redirect()->back()->with('success', 'Data product berhasil diperbarui');
    }


}

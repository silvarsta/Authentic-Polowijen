<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Carts;
use App\Models\Orders;
use App\Models\Bayar;
use App\Models\MetodePembayaran;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        // Validate request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            // Anda juga bisa menambahkan validasi untuk data tambahan seperti session_id, created_at, updated_at
        ]);

        // Add item to the cart
        Cart::create([
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'price' => $request->price,
            // Tambahkan atribut lain seperti session_id, created_at, updated_at jika diperlukan
        ]);

        return response()->json(['message' => 'Item added to cart successfully']);
    }

    // public function addCart(Request $request)
    // {
    //     $product = Product::find($request->id);

    //     if($product == null) {
    //         return response()->json([
    //             'status'=>false,
    //             'message'=>'Product not found'
    //         ]);
    //     }

    //     if(Cart::count() > 0) {

    //         $cartContent = Cart::content();
    //         $productAlreadyExist = false;

    //         foreach ($cartContent as $item) {
    //             if ($item->id == $product->id) {
    //                 $productAlreadyExist = true;
    //             }
    //         }
    //         if ($productAlreadyExist == false) {
    //             Cart::add($product->id, $product->name, 1, $product->price);
    //             $status = true;
    //             $message = $product->name. ' added in cart';

    //         } else {
    //             $status = false;
    //             $message = $product->name. ' already added in cart';
    //         }

    //     } else {
    //         // Cart empty
    //         Cart::add($product->id, $product->name, 1, $product->price);
    //         $status = true;
    //         $message = $product->name. ' added in cart';
    //     }

    //     return response()->json([
    //         'status'=>$status,
    //         'message'=>$message
    //     ]);
    // }

    public function cart()
    {
        return view('home.sentra.addcart');
    }

    public function cekout(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);

        // Mengirim data produk ke view cekout
        return view('home.sentra.cekout', compact('product'));
    }

    // public function store(Request $request)
    // {
    //     // Validasi data input
    //     $validatedData = $request->validate([
    //         'fullName' => 'required|string',
    //         'address' => 'required|string',
    //         'phoneNumber' => 'required|string',
    //         'jumlahTransfer' => 'required|integer',
    //         'transferMethod' => 'required|string', // tambahkan validasi untuk metode transfer
    //         'buktiPembayaran' => 'required|string', // tambahkan validasi untuk bukti pembayaran (opsional)
    //         'catatan' => 'nullable|string',
    //         'total_price' => 'required|string',
    //         'product_id' => 'required|exists:products,id',
    //     ]);

    //     // Simpan data order ke dalam database
    //     $order = new Orders();
    //     $order->product_id = $validatedData['product_id'];
    //     $order->full_name = $validatedData['fullName'];
    //     $order->address = $validatedData['address'];
    //     $order->phone_number = $validatedData['phoneNumber'];
    //     $order->note = $validatedData['catatan'];
    //     $order->total_price = $validatedData['total_price'];
    //     $order->jumlah_transfer = $request->input('jumlah_transfer');
    //     $order->transfer_melalui = $validatedData['transferMethod'];

    //     // Proses upload bukti pembayaran jika ada
    //     if ($request->hasFile('buktiPembayaran')) {
    //         $imageName = time() . '.' . $request->buktiPembayaran->extension();
    //         $request->buktiPembayaran->move(public_path('images/sentra/pembayaran'), $imageName);
    //         $order->bukti_pembayaran = 'images/sentra/pembayaran/' . $imageName;
    //     } else {
    //         echo "proses gagal";
    //     }

    //     // // Simpan gambar ke direktori tertentu
    //     // $imageName = time().'.'.$request->buktiPembayaran->extension();
    //     // $request->buktiPembayaran->move(public_path('images/sentra/pembayaran'), $imageName);

    //     // // Simpan data ke database
    //     // Orders::create([
    //     //     'gambar' => $imageName,
    //     //     'judul' => $request->judul,
    //     //     'deskripsi' => $request->deskripsi,
    //     //     'fullName' => $request->fullName,
    //     //     'address' => $request->address,
    //     //     'phoneNumber' => $request->phoneNumber,
    //     //     'jumlahTransfer' => $request->jumlahTransfer,
    //     //     'transferMethod' => $request->transferMethod,
    //     //     'buktiPembayaran' => $request->buktiPembayaran,
    //     //     'catatan' => $request->catatan,

    //     //     'total_price' => $request->total_price,
    //     //     'product_id' => $request->product_id,
    //     // ]);

    //     $order->save();

    //     // Redirect ke halaman lain setelah order berhasil disimpan
    //     return redirect()->back()->with('success', 'Pesanan anda berhasil disimpan.');
    // }

    public function kirim(Request $request)
    {
        $rules = [
            'product_id' => 'required',
            'fullName' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'note' => 'nullable',
            // 'jumlahTransfer' => 'required',
            'transferMethod' => 'required',
            'buktiPembayaran' => 'required',
            'total_price' => 'required',
        ];

        // Simpan gambar ke direktori tertentu
        // $imageName = time().'.'.$request->buktiPembayaran->extension();
        // $request->buktiPembayaran->move(public_path('images/sentra/pembayaran'), $imageName);
        // MetodePembayaran::create([
        //     'product_id' => $request->product_id,
        // ]);
        Bayar::create([
            'product_id' => $request->product_id,
            'full_name' => $request->fullName,
            'address' => $request->address,
            'phone_number' => $request->phoneNumber,
            'total_price' => $request->total_price,
            // 'jumlah_transfer' => $request->JumlahTransfer,
            'transfer_melalui' => $request->transferMethod,
            'bukti_pembayaran' => $request->buktiPembayaran,
            'note' => $request->catatan,
        ]);
        // $metodes = MetodePembayaran::orderBy('name', 'desc')->get();


        return redirect()->route('sentra')->with('success', 'PEMBAYARAN berhasil ditambahkan.');

    }

    public function bayar(Request $request)
    {
        $product_id = $request->input('product_id');
        $product = Product::findOrFail($product_id);

        return view('home.sentra.form-bayar', compact('product'));
    }


}

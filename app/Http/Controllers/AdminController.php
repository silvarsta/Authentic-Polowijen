<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Orders;
use App\Models\Bayar;
use App\Models\Bayardua;

class AdminController extends Controller
{
    public function showUser()
    {
        $showUser = User::where('role', 'user')->paginate(15);
        $showUser->onEachSide(1);
        return view('userprofile', ['showUser' => $showUser]);
    }
    public function dashboard()
    {
        $categories = Category::all();
        $data =
        [
            'category'=>Category::orderBy('name', 'asc')->get(),
            'product'=>Products::all(),
            'galeri'=>Galeri::all(),
            'orders'=>Orders::all()
        ];
        return view('admin.index', compact('categories'), $data);
    }

    public function transaksi()
    {
        return view('admin.transaksiSentra');
    }

    public function showAddUser()
    {
        return view('adduser');
    }

    public function addUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:10|unique:users',
            'fullname' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|min:8',
        ]);
        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'role' => 'user',
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'verification_token' => Str::random(60),
            'email_verified' => true,
        ]);

        return redirect()->route('admin.userprofile');
    }
    public function userDestroy(User $userdestroy)
    {
        $userdestroy->delete();
        return redirect()->route('admin.userprofile');
    }
    public function showProfile()
    {
        $admin = Auth::user();
        return view('profile', compact('admin'));
    }
    public function notifikasi()
    {
        return view('admin.notifications');
    }

    public function account()
    {
    $admins = User::where('role', 'admin')->get();
    return view('admin.account', compact('admins'));
    }

    public function editaccount()
    {
        $admins = User::where('role', 'admin')->get();
        return view('admin.editaccount', compact('admins'));
    }
    public function simpanaccount(Request $request)
    {
        $admins = User::where('role', 'admin')->get();

        $request->validate([
            'username' => 'required|string|max:10|unique:users',
            'fullname' => 'required|string|max:100',
            'image' => 'file|image|max:2048|dimensions:ratio=1/1',
        ]);

        $data = $request->only(['fullname', 'username']);

        // Assuming you're updating the profile of the first admin user
        $admin = $admins->first();

        $previousPhoto = $admin->image;

        if ($request->hasFile('image')) {
            if ($previousPhoto && File::exists(public_path('profile/' . $previousPhoto)) !== 'images/default.png') {
                File::delete(public_path('profile/' . $previousPhoto));
            }
            $extFile = $request->file('image')->getClientOriginalExtension();
            $nameFile = 'profile-' . time() . "." . $extFile;
            $request->file('image')->move('profile', $nameFile);
            $data['image'] = $nameFile;
        }

        $admin->update($data);

        return redirect()->route('account');
    }

    public function orders()
    {
        $orders = Bayar::all();
        return view('admin.index', compact('orders'));

    }

    public function adminPembayaran()
    {
        $orders = Bayar::all();
        return view('admin.verifikasiBayar', compact('orders'));
    }

//     public function accept($id)
// {
//     $order = Orders::findOrFail($id);

//     // Proses untuk mengirim ke tabel lain

//     return redirect()->back()->with('success', 'Pesanan telah diterima.');
// }

// public function reject($id)
// {
//     $order = Orders::findOrFail($id);

//     // Proses untuk menghapus pesanan dari database

//     $order->delete();

//     return redirect()->back()->with('success', 'Pesanan telah ditolak dan dihapus.');
// }

}

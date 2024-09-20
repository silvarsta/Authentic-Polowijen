<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SentraController;
use App\Http\Controllers\ProductController;

Route::group(['prefix' => ''], function () {
    Route::get('/about', fn () => view('home.about'))->name('about');

    Route::get('/blog1', fn () => view('home.blog.blog1'))->name('blog1');
    Route::get('/blog2', fn () => view('home.blog.blog2'))->name('blog2');

    Route::get('/contact', fn () => view('home.contact'))->name('contact');

    Route::get('/sentra1', fn () => view('home.sentra.sentra1'))->name('sentra1');
    Route::get('/sentra2', fn () => view('home.sentra.sentra2'))->name('sentra2');
    Route::get('/cart', fn() => view('home.sentra.addcart'))->name('cart');
    Route::get('/cekout', fn() => view('home.sentra.cekout'))->name('cekout');
    Route::get('/bayar', fn() => view('home.sentra.form-bayar'))->name('bayar');

});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [ViewController::class, 'home'])->name('guest.home');
    Route::get('/blog/{page?}', [BlogController::class, 'blog'])->name('guest.blog');
    Route::get('/galeri/{page?}', [GaleriController::class, 'galeri'])->name('guest.galeri');
    Route::get('/sentra/{page?}', [SentraController::class, 'sentra'])->name('guest.sentra');
    Route::get('/about', [ViewController::class, 'about'])->name('guest.about');
    Route::get('/contact', [UserDataController::class, 'contactView'])->name('guest.contact');

    Route::get('/regist', [UserRegisterController::class, 'showRegistration'])->name('register');
    Route::post('/regist', [UserRegisterController::class, 'register'])->name('register.process');
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::middleware(['auth', 'akses:user'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [ViewController::class, 'home'])->name ('home');

        Route::get('/blog/{page?}', [BlogController::class, 'blog'])->name('blog');

        Route::get('/galeri/{page?}', [GaleriController::class, 'galeri'])->name('galeri');
        Route::get('/galeri/{page?}', [GaleriController::class, 'user'])->name('galeri');

        Route::get('/sentra', [SentraController::class, 'sentra'])->name('sentra');
        Route::get('/sentra/kegiatan', [SentraController::class, 'kegiatan'])->name('sentra.kegiatan');
        Route::get('/sentra/produk', [SentraController::class, 'produk'])->name('sentra.produk');
        Route::get('/sentra/cart', [CartController::class, 'cart'])->name('sentra.cart');
        Route::post('/sentra/addCart', [CartController::class, 'addCart'])->name('sentra.addCart');
        Route::get('/sentra/cekout/{product_id}', [CartController::class, 'cekout'])->name('sentra.cekout');

        Route::post('/sentra/cekout/bayar', [CartController::class, 'kirim'])->name('sentra.kirim');

        Route::get('/about', [ViewController::class, 'about'])->name('about');
        Route::get('/contact', [UserDataController::class, 'contactView'])->name('contact'); //sementara

        Route::get('/my-profile', [UserDataController::class, 'showUserData'])->name('profile.show');
        Route::get('/my-profile/edit', [UserDataController::class, 'editUserData'])->name('profile.edit')->middleware(['auth', 'akses:user']);
        Route::patch('/my-profile/edit', [UserDataController::class, 'update'])->name('profile.update')->middleware(['auth', 'akses:user']);
        Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('change.password.form');
        Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password');
    });
});

Route::get('/logout', [SesiController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'akses:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get("/dashboard", [AdminController::class, "orders"])->name('dashboard');
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        Route::get("/pembayaran", [AdminController::class, "adminPembayaran"])->name('pembayaran');

        Route::get("/galeri", [GaleriController::class, "adminGaleri"])->name('galeri')->middleware(['auth', 'akses:admin']);
        Route::post("/galeri/tambah", [GaleriController::class, "tambahGaleri"])->name('galeri.tambah');

        Route::get("/galeri", [GaleriController::class, "adminGaleri"])->name('admin.galeri')->middleware(['auth', 'akses:admin']);
        Route::post("/galeri/tambah", [GaleriController::class, "tambahGaleri"])->name('admin.galeri.tambah');

        // Galeri Admin
        Route::get('/admin/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
        Route::delete('/admin/galeri/delete/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.delete');
        Route::get('/admin/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
        Route::put('/admin/galeri/{id}', [GaleriController::class, 'update'])->name('galeri.update');

        Route::get('/admin/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
        Route::put('/admin/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');

        // Artikel Admin
        Route::get("/artikel", [ArtikelController::class, "adminArtikel"])->name('admin.artikel')->middleware(['auth', 'akses:admin']);
        Route::post("/artikel/tambah", [ArtikelController::class, "tambahArtikel"])->name('admin.artikel.tambah');
        Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::delete('/admin/artikel/delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.artikel.delete');
        // Rute untuk menampilkan halaman edit
        Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('admin.artikel.edit');
        Route::put('/admin/artikel/{id}', [ArtikelController::class, 'update'])->name('admin.artikel.update');

        Route::group(['prefix' => 'sentra'], function () {
            Route::get("/", [SentraController::class, "adminSentra"])->name('admin.sentra')->middleware(['auth', 'akses:admin']);
            Route::post("/tambah", [SentraController::class, "tambahSentra"])->name('tambahSentra')->middleware(['auth', 'akses:admin']);
            Route::post("/delete/{id}", [SentraController::class, "deleteSentra"])->name('deleteSentra')->middleware(['auth', 'akses:admin']);
            Route::get("/{id}/edit", [SentraController::class, "editSentra"])->name('editSentra')->middleware(['auth', 'akses:admin']);
            Route::put("/{id}", [SentraController::class, "updateSentra"])->name('updateSentra')->middleware(['auth', 'akses:admin']);
        });

        Route::get("/transaksi", [AdminController::class, "transaksi"])->name('admin.transaksi')->middleware(['auth', 'akses:admin']);

        Route::get("/account", [AdminController::class, "account"])->name('account');
        Route::get("edit-account", [AdminController::class, "editaccount"])->name('editaccount');
        Route::patch("/simpanaccount", [AdminController::class, 'simpanaccount'])->name('simpanaccount');

        Route::get("/artikel", [ArtikelController::class, "adminArtikel"])->name('artikel')->middleware(['auth', 'akses:admin']);

        Route::delete('/user-result/{editusertesdata}', [AdminController::class, 'historyDestroy'])->name('admin.userresult.destroy')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile", [AdminController::class, "showUser"])->name('admin.userprofile')->middleware(['auth', 'akses:admin']);
        Route::get("/user-profile/add-user", [AdminController::class, "showAddUser"])->name('admin.show.adduser')->middleware(['auth', 'akses:admin']);
        Route::post("/user-profile/add-user", [AdminController::class, "addUser"])->name('admin.adduser')->middleware(['auth', 'akses:admin']);
        Route::delete('/user-profile/{userdestroy}', [AdminController::class, 'userDestroy'])->name('admin.userprofile.destroy')->middleware(['auth', 'akses:admin']);
        Route::get('/profile', [AdminController::class, 'showProfile'])->name('admin.profile')->middleware(['auth', 'akses:admin']);
        Route::get("/dat-reg-asesmen/delete/{idasesi}", [AdminController::class, "AsesmenDeleteAll"])->name('admin.datregasesmen.delete')->middleware(['auth', 'akses:admin']);
        Route::get("/dat-reg-asesi/{idasesi}", [AdminController::class, "showRegAsesi"])->name('admin.datregasesi')->middleware(['auth', 'akses:admin']);
        Route::post('/dat-reg-asesi/store', [AdminController::class, 'storeDatRegAsesi'])->name('admin.datregasesi.store')->middleware(['auth', 'akses:admin']);
    });
});

Route::get('password/forgot', [ForgotPasswordController::class, 'showForgotForm'])->name('password.forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'forgotPassword'])->name('password.forgot.submit');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'resetPassword'])->name('password.reset.submit');
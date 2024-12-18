<?php

use App\Models\Mahasiswa;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanDaftarController;
use App\Http\Controllers\LaporanPasienController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use Illuminate\Auth\Middleware\Authenticate;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Auth\LoginController;


Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa_create');

Route::resource('pasien', PasienController::class)->middleware(Authenticate::class);
Route::middleware([Authenticate::class])->group(function () {
        Route::resource('pasien', PasienController::class);
        Route::resource('daftar', DaftarController::class);
        Route::resource('poli', PoliController::class);
        Route::resource('laporan-pasien', LaporanPasienController::class);
        Route::resource('laporan-daftar', LaporanDaftarController::class);
});

Auth::routes();

Route::middleware('auth')->get('/produk', function () {
        
        Route::resource('produk', PasienController::class)->middleware(Authenticate::class);

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('produk', ProdukController::class);
        Route::resource('pesanan', PesananController::class);

        Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
        Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');

        // Edit Produk
        Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
        Route::put('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
        // Hapus Produk
        Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');
        return view('produk_index');
    });
// Grouping Routes yang Dilindungi dengan Middleware Auth
Route::middleware('auth')->group(function () {
        // Route Produk
        Route::get('/produk', function () {
                return view('produk_index');
            });
        // Route Pesanan
        Route::resource('pesanan', PesananController::class);
    });
    
    // Jika Anda perlu route lainnya tanpa middleware, definisikan di luar grup middleware auth
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware([Authenticate::class])->group(function () {
        

        
//         return view('produk_index');
// });

Route::resource('produk',ProdukController::class);

Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
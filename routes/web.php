<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('shop.master');
// });

Route::get('/',[App\Http\Controllers\LandingPageController::class,'index']);
Route::get('/barang/{id}',[App\Http\Controllers\LandingPageController::class,'barang']);

Route::get('login',[App\Http\Controllers\LoginController::class,'index']);
Route::post('login',[App\Http\Controllers\LoginController::class,'login']);
Route::get('register',[App\Http\Controllers\RegisterController::class,'index']);
Route::post('register',[App\Http\Controllers\RegisterController::class,'register']);



Auth::routes(['login'=>false,'register'=>false]);



Route::middleware(['role:admin'])->group(function () {

    Route::resource('produk',App\Http\Controllers\Admin\ProdukController::class);
    Route::resource('kategori-barang',App\Http\Controllers\Admin\KategoriBarangController::class);
    Route::resource('stok-barang',App\Http\Controllers\Admin\StokBarangController::class);
    Route::resource('barang-bangunan',App\Http\Controllers\Admin\BarangController::class);
    Route::resource('akun-bank',App\Http\Controllers\Admin\AkunBankController::class);

});

Route::middleware(['role:pembeli'])->group(function () {
    Route::get('keranjang',[App\Http\Controllers\Pembeli\keranjangController::class,'index']);
    Route::get('keranjang/hapus/{id}',[App\Http\Controllers\Pembeli\keranjangController::class,'hapus_barang']);
    Route::get('keranjang/bayar',[App\Http\Controllers\Pembeli\keranjangController::class,'bayar']);
    Route::post('tambahkeranjang',[App\Http\Controllers\Pembeli\TambahKeranjangController::class,'tambah_barang']);
    Route::resource('alamat',App\Http\Controllers\Pembeli\AlamatController::class);

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

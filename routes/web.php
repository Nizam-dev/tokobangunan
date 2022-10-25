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
Route::get('/barang',[App\Http\Controllers\LandingPageController::class,'barang']);


Auth::routes(['login'=>false,'register'=>false]);

Route::resource('produk',App\Http\Controllers\Admin\ProdukController::class);
// Route::resource('login',App\Http\Controllers\LoginController::class);
Route::resource('kategori-barang',App\Http\Controllers\Admin\KategoriBarangController::class);
Route::resource('stok-barang',App\Http\Controllers\Admin\StokBarangController::class);
Route::resource('barang-bangunan',App\Http\Controllers\Admin\BarangController::class);
Route::resource('akun-bank',App\Http\Controllers\Admin\AkunBankController::class);


Route::middleware(['role:admin'])->group(function () {


});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Kirim;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

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

Route::get('/', [Controller::class, 'index']);
Route::post('/cart', [Controller::class, 'hitungJumlah'])->name('hitungJumlah');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/admin/produk/tambah', [AdminController::class, 'createProduk'])->name('tambahProduk');
    Route::delete('/admin/produk/delete', [AdminController::class, 'destroyProduk'])->name('hapusProduk');
    Route::put('/admin/produk/update', [AdminController::class, 'updateProduk'])->name('updateProduk');
    Route::post('/admin/kategori/tambah', [AdminController::class, 'createKategori'])->name('tambahKategori');
    Route::delete('/admin/kategori/delete', [AdminController::class, 'destroyKategori'])->name('hapusKategori');
});

Route::get('/users', [UsersController::class, 'index'])->middleware('auth');


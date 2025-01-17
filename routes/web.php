<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });


Route::get('dashboard',[MainController::class,'index'])->name('dashboard');

Route::get('/',[MainController::class,'viewlogin'])->name('login');
Route::post('process-login',[MainController::class,'login'])->name('process-login');
Route::get('register',[MainController::class,'viewregister'])->name('register');   
Route::post('process-register',[MainController::class,'register'])->name('process-register');
Route::post('logout',[MainController::class,'logout'])->name('logout');

Route::get('penjualan',[PenjualanController::class,'index'])->name('penjualan');
Route::get('penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
Route::post('penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
Route::get('/nota/{penjualanId}', [NotaController::class, 'generateNota'])->name('nota.generate');

Route::get('produk',[ProdukController::class,'index'])->name('produk');
Route::get('produk/create',[ProdukController::class,'create'])->name('produk.create');
Route::post('produk/store',[ProdukController::class,'store'])->name('produk.store');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');

Route::get('pelanggan',[PelangganController::class,'index'])->name('pelanggan');
Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
Route::get('pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
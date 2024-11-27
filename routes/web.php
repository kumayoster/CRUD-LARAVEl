<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\UserController;


// Route for the home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Supplier Routes
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');

// Barang Routes
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

// Stock Routes
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
Route::get('/stok/{stok}/edit', [StokController::class, 'edit'])->name('stok.edit');
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');

// Pinjam Barang Routes
Route::get('/pinjam_barang', [PinjamBarangController::class, 'index'])->name('pinjam_barang.index');
Route::get('/pinjam_barang/create', [PinjamBarangController::class, 'create'])->name('pinjam_barang.create');
Route::post('/pinjam_barang', [PinjamBarangController::class, 'store'])->name('pinjam_barang.store');
Route::get('/pinjam_barang/{pinjam_barang}/edit', [PinjamBarangController::class, 'edit'])->name('pinjam_barang.edit');
Route::put('/pinjam_barang/{id}', [PinjamBarangController::class, 'update'])->name('pinjam_barang.update');
Route::delete('/pinjam_barang/{pinjam_barang}', [PinjamBarangController::class, 'destroy'])->name('pinjam_barang.destroy');

// Barang Masuk Routes
Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
Route::get('/barangmasuk/create', [BarangMasukController::class, 'create'])->name('barangmasuk.create');
Route::post('/barangmasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
Route::get('/barangmasuk/{barangmasuk}/edit', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');
Route::put('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
Route::delete('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'destroy'])->name('barangmasuk.destroy');

// Barang Keluar Routes
Route::get('/barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
Route::get('/barangkeluar/create', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');
Route::post('/barangkeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
Route::get('/barangkeluar/{barangkeluar}/edit', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');
Route::put('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');
Route::delete('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.destroy');


// User Routes
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
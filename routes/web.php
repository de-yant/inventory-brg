<?php

use Illuminate\Support\Facades\Route;

//profile
use App\Http\Controllers\ProfileController;

//dashboard
use App\Http\Controllers\DashboardController;

//master
use App\Http\Controllers\MerkController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SatuanController;

//pelanggan
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;

//transaksi
use App\Http\Controllers\BkController;
use App\Http\Controllers\BmController;

//laporan
use App\Http\Controllers\LapBKController;
use App\Http\Controllers\LapBMController;
use App\Http\Controllers\LapStokController;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //master
    Route::get('/jenis', [JenisController::class, 'index'])->name('jenis');
    Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
    Route::get('/jenis/{id}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
    Route::put('/jenis/{id}', [JenisController::class, 'update'])->name('jenis.update');
    Route::get('/jenis/{id}', [JenisController::class, 'destroy'])->name('jenis.destroy');


    Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan');
    Route::post('/satuan', [SatuanController::class, 'store'])->name('satuan.store');
    Route::get('/satuan/{id}/edit', [SatuanController::class, 'edit'])->name('satuan.edit');
    Route::put('/satuan/{id}', [SatuanController::class, 'update'])->name('satuan.update');
    Route::get('/satuan/{id}', [SatuanController::class, 'destroy'])->name('satuan.destroy');

    Route::get('/merk', [MerkController::class, 'index'])->name('merk');
    Route::post('/merk', [MerkController::class, 'store'])->name('merk.store');
    Route::get('/merk/{id}/edit', [MerkController::class, 'edit'])->name('merk.edit');
    Route::put('/merk/{id}', [MerkController::class, 'update'])->name('merk.update');
    Route::get('/merk/{id}', [MerkController::class, 'destroy'])->name('merk.destroy');

    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::get('/barang/{id}/show', [BarangController::class, 'show'])->name('barang.show');
    Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


    //pelanggan
    Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli');
    Route::post('/pembeli', [PembeliController::class, 'store'])->name('pembeli.store');
    Route::get('/pembeli/{id}/edit', [PembeliController::class, 'edit'])->name('pembeli.edit');
    Route::put('/pembeli/{id}', [PembeliController::class, 'update'])->name('pembeli.update');
    Route::get('/pembeli/{id}', [PembeliController::class, 'destroy'])->name('pembeli.destroy');

    Route::get('/penjual', [PenjualController::class, 'index'])->name('penjual');
    Route::post('/penjual', [PenjualController::class, 'store'])->name('penjual.store');
    Route::get('/penjual/{id}/edit', [PenjualController::class, 'edit'])->name('penjual.edit');
    Route::put('/penjual/{id}', [PenjualController::class, 'update'])->name('penjual.update');
    Route::get('/penjual/{id}', [PenjualController::class, 'destroy'])->name('penjual.destroy');

    //transaksi
    Route::get('/bm', [BmController::class, 'index'])->name('bm');
    Route::get('/bm/create', [BmController::class, 'create'])->name('bm.create');
    Route::post('/bm', [BmController::class, 'store'])->name('bm.store');

    Route::get('/bk', [BkController::class, 'index'])->name('bk');
    Route::get('/bk/create', [BkController::class, 'create'])->name('bk.create');
    Route::post('/bk', [BkController::class, 'store'])->name('bk.store');

    //laporan
    Route::get('/laporan-masuk', [LapBMController::class, 'index'])->name('laporan-masuk');
    Route::get('/laporan-masuk/cetakpdf', [LapBMController::class, 'cetakpdf'])->name('laporan-masuk.cetakpdf');
    Route::get('/laporan-keluar', [LapBKController::class, 'index'])->name('laporan-keluar');
    Route::get('/laporan-keluar/cetakpdf', [LapBKController::class, 'cetakpdf'])->name('laporan-keluar.cetakpdf');
    Route::get('/laporan-stok', [LapStokController::class, 'index'])->name('laporan-stok');
    Route::get('/laporan-stok/cetakpdf', [LapStokController::class, 'cetakpdf'])->name('laporan-stok.cetakpdf');

});


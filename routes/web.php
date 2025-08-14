<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\JadwalPakanController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\ReproduksiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LaporanController;

Route::get('/', fn() => redirect()->route('dashboard'));

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Data Ternak
Route::get('/ternak/history', [TernakController::class, 'history'])->name('ternak.history');
Route::resource('ternak', TernakController::class);

// Pakan
Route::resource('pakan', PakanController::class);
Route::resource('jadwal-pakan', JadwalPakanController::class);

// Halaman utama Kesehatan
Route::get('/kesehatan', [KesehatanController::class, 'index'])->name('kesehatan.index');

// Jadwal Vaksinasi
Route::prefix('kesehatan')->name('kesehatan.')->group(function () {
    Route::get('/jadwal-vaksinasi', [KesehatanController::class, 'jadwalVaksinasi'])
         ->name('jadwal-vaksinasi');

    Route::post('/jadwal-vaksin', [KesehatanController::class, 'store'])
     ->name('jadwal-vaksin.store');
    });

// Pemeriksaan & Pengobatan
Route::get('/kesehatan/pemeriksaan', [KesehatanController::class, 'pemeriksaan'])
    ->name('kesehatan.pemeriksaan');

Route::post('/kesehatan/pemeriksaan', [KesehatanController::class, 'storePemeriksaan'])
    ->name('kesehatan.storePemeriksaan');

// Reproduksi
Route::resource('reproduksi', ReproduksiController::class);

// Transaksi (Keuangan)
Route::resource('transaksi', TransaksiController::class);

// Laporan
Route::resource('laporan', LaporanController::class);

// Pengguna
Route::resource('pengguna', PenggunaController::class);

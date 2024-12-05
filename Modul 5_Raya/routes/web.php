<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

// Halaman utama untuk memilih antara Dosen dan Mahasiswa
Route::get('/', function () {
    return view('dashboard'); // Tampilkan halaman dashboard utama
})->name('index');

// Routing untuk Dosen
Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/dosens/{id}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/dosens/{id}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('/dosens/{id}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/dosens/{id}', [DosenController::class, 'destroy'])->name('dosens.destroy');

// Routing untuk Mahasiswa
Route::get('mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index'); // Tampilkan daftar mahasiswa
Route::get('mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create'); // Tampilkan form tambah mahasiswa
Route::post('mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store'); // Simpan data mahasiswa
Route::get('mahasiswas/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit'); // Tampilkan form edit mahasiswa
Route::put('mahasiswas/{id}', [MahasiswaController::class, 'update'])->name('mahasiswas.update'); // Update data mahasiswa
Route::delete('mahasiswas/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy'); // Hapus data mahasiswa
Route::get('/mahasiswas/{id}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');


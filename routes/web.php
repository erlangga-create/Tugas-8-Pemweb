<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/simpan', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::get('/hapus/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
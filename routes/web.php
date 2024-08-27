<?php

use App\Http\Controllers\KeluargaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('keluarga.daftar');
});

Route::get('/tambah', function () {
    return view('keluarga.tambah');
});

Route::post('/tambah-keluarga', [KeluargaController::class, 'TambahKeluarga']);

Route::get('/', [KeluargaController::class, 'IndexKeluarga']);


Route::get('/Keluarga/{id}', [KeluargaController::class, 'show'])->name('Keluarga.show');

Route::get('/keluarga/{id}/edit', [KeluargaController::class, 'edit'])->name('Keluarga.edit');
Route::put('/keluarga/{id}', [KeluargaController::class, 'update'])->name('Keluarga.update');

Route::delete('Keluarga/{id}', [KeluargaController::class, 'destroy'])->name('Keluarga.destroy');


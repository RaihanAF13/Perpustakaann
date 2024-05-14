<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SanksiController;
use App\Models\Anggota;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/anggota',\App\Http\Controllers\AnggotaController::class);
Route::resource('/kelas',\App\Http\Controllers\RakController::class);
Route::resource('/matakuliah',\App\Http\Controllers\PenulisController::class);
Route::put('/anggota/{anggota}', [AnggotaController::class, 'update'])->name('anggota.update');

Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::post('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

Route::get('/penulis', [PenulisController::class, 'index']);
Route::post('/penulis', [PenulisController::class, 'store']);
Route::get('/penulis/{id}', [PenulisController::class, 'show']);
Route::put('/penulis/{id}', [PenulisController::class, 'update']);
Route::delete('/penulis/{id}', [PenulisController::class, 'destroy']);

Route::resource('penulis', PenulisController::class);
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');

Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
Route::post('/penulis', [PenulisController::class, 'store'])->name('penulis.store');
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
Route::delete('/penulis/{id}', [PenulisController::class, 'destroy'])->name('penulis.destroy');

Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');
Route::post('/rak', [RakController::class, 'store'])->name('rak.store');
Route::get('/rak/{id}/edit', [RakController::class, 'edit'])->name('rak.edit');
Route::put('/rak/{id}', [RakController::class, 'update'])->name('rak.update');
Route::delete('/rak/{id}', [RakController::class, 'destroy'])->name('rak.destroy');

Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
Route::get('/rak/create', [RakController::class, 'create'])->name('rak.create');
Route::post('/rak', [RakController::class, 'store'])->name('rak.store');
Route::get('/rak/{id}/edit', [RakController::class, 'edit'])->name('rak.edit');
Route::put('/rak/{id}', [RakController::class, 'update'])->name('rak.update');
Route::delete('/rak/{id}', [RakController::class, 'destroy'])->name('rak.destroy');

Route::get('/rak/{id}', [RakController::class, 'show'])->name('rak.show');


// Route untuk menampilkan form pembuatan sanksi
Route::get('/sanksi/create', [SanksiController::class, 'create'])->name('sanksi.create');

// Route untuk menyimpan sanksi baru
Route::post('/sanksi', [SanksiController::class, 'store'])->name('sanksi.store');

// Route untuk menampilkan daftar sanksi
Route::get('/sanksi', [SanksiController::class, 'index'])->name('sanksi.index');

// Route untuk menampilkan detail sanksi
Route::get('/sanksi/{id}', [SanksiController::class, 'show'])->name('sanksi.show');

// Route untuk menampilkan form edit sanksi
Route::get('/sanksi/{id}/edit', [SanksiController::class, 'edit'])->name('sanksi.edit');

// Route untuk menyimpan perubahan pada sanksi
Route::put('/sanksi/{id}', [SanksiController::class, 'update'])->name('sanksi.update');

// Route untuk menghapus sanksi
Route::delete('/sanksi/{id}', [SanksiController::class, 'destroy'])->name('sanksi.destroy');
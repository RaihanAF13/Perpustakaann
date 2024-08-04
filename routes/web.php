<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\SanksiController;
use App\Models\Anggota;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/anggota', \App\Http\Controllers\AnggotaController::class);
Route::resource('/kelas', \App\Http\Controllers\RakController::class);
Route::resource('/matakuliah', \App\Http\Controllers\PenulisController::class);
Route::put('/anggota/{anggota}', [AnggotaController::class, 'update'])->name('anggota.update');

Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::post('/anggota/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');



Route::resource('penulis', PenulisController::class);
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');


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
Route::get('/sanksi/{sanksi}/edit', [SanksiController::class, 'edit'])->name('sanksi.edit');
// Route untuk menyimpan perubahan pada sanksi
Route::put('/sanksi/{sanksi}', [SanksiController::class, 'update'])->name('sanksi.update');
// Route untuk menghapus sanksi
Route::delete('/sanksi/{id}', [SanksiController::class, 'destroy'])->name('sanksi.destroy');
Route::resource('sanksi', SanksiController::class);
Route::resource('buku', BukuController::class);


Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman/{id}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

// Route untuk tampilan utama (index) dan CRUD untuk Buku
Route::resource('buku', BukuController::class);

// Jika Anda ingin menambahkan route untuk penulis atau rak, Anda bisa menambahkannya di sini
// Misalnya:

// Route untuk tampilan utama (index) dan CRUD untuk Penulis
Route::resource('penulis', \App\Http\Controllers\PenulisController::class);

// Route untuk tampilan utama (index) dan CRUD untuk Rak
Route::resource('rak', \App\Http\Controllers\RakController::class);

// Route untuk Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{no_buku}', [BukuController::class, 'show'])->name('buku.show');
Route::get('/buku/{no_buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{no_buku}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{no_buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/rak', [RakController::class, 'index'])->name('rak.index');
Route::get('/rak/{no_rak}', [RakController::class, 'show'])->name('rak.show');


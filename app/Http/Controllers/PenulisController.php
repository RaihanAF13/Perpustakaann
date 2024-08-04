<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    // Menampilkan daftar penulis
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    // Menampilkan formulir untuk membuat penulis baru
    public function create()
    {

        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penulis' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|unique:penulis,email',
        ]);

        $penulis = new Penulis;
        $penulis->nama_penulis = $validatedData['nama_penulis'];
        $penulis->tempat_lahir = $validatedData['tempat_lahir'];
        $penulis->tgl_lahir = $validatedData['tgl_lahir'];
        $penulis->email = $validatedData['email'];
        $penulis->save();

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }


    // Menampilkan detail penulis
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    // Menampilkan formulir untuk mengedit penulis
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    // Memperbarui data penulis
    public function update(Request $request, $id)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_penulis' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|unique:penulis,email,' . $id . ',kd_penulis',
        ]);

        // Temukan penulis dan perbarui datanya

        $penulis = Penulis::findOrFail($id);
        $penulis->nama_penulis = $validatedData['nama_penulis'];
        $penulis->tempat_lahir = $validatedData['tempat_lahir'];
        $penulis->tgl_lahir = $validatedData['tgl_lahir'];
        $penulis->email = $validatedData['email'];
        $penulis->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil diperbarui.');
    }

    // Menghapus penulis
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil dihapus.');
    }
}

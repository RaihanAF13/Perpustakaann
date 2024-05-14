<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|max:200|unique:anggota,email',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')
                         ->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Temukan anggota berdasarkan id
        $anggota = Anggota::findOrFail($id);

        // Tampilkan form edit dengan data anggota
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:150',
            'no_hp' => 'required|string|max:16',
            'alamat' => 'required|string',
            'email' => 'required|string|email|max:200',
        ]);

        // Temukan anggota berdasarkan id
        $anggota = Anggota::findOrFail($id);

        // Update data anggota
        $anggota->nama = $validatedData['nama'];
        $anggota->no_hp = $validatedData['no_hp'];
        $anggota->alamat = $validatedData['alamat'];
        $anggota->email = $validatedData['email'];

        // Simpan perubahan
        $anggota->save();

        // Kembalikan respon
        return redirect()->route('anggota.index')->with('success', 'Anggota updated successfully');
    }

    public function destroy($id)
    {
        // Temukan anggota berdasarkan id
        $anggota = Anggota::findOrFail($id);

        // Hapus anggota
        $anggota->delete();

        // Kembalikan respon
        return redirect()->route('anggota.index')->with('success', 'Anggota deleted successfully');
    }
}

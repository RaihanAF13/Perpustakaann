<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kd_penulis' => 'required|integer|unique:penulis,kd_penulis',
            'nama_penulis' => 'required|string|max:150',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|string|email|max:150',
        ]);

        // Buat penulis baru
        Penulis::create($validatedData);

        // Kembalikan respon
        return redirect()->route('penulis.index')->with('success', 'Penulis created successfully');
    }

  

    public function show($id)
    {
        $penulis = Penulis::find($id);
        return view('penulis.show', compact('penulis'));
    }

    public function edit($id)
    {
        // Temukan penulis berdasarkan id
        $penulis = Penulis::findOrFail($id);

        // Tampilkan form edit dengan data penulis
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_penulis' => 'required|string|max:150',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|string|email|max:150',
        ]);

        // Temukan penulis berdasarkan id
        $penulis = Penulis::findOrFail($id);

        // Update data penulis
        $penulis->nama_penulis = $validatedData['nama_penulis'];
        $penulis->tempat_lahir = $validatedData['tempat_lahir'];
        $penulis->tanggal_lahir = $validatedData['tanggal_lahir'];
        $penulis->email = $validatedData['email'];

        // Simpan perubahan
        $penulis->save();

        // Kembalikan respon
        return redirect()->route('penulis.index')->with('success', 'Penulis updated successfully');
    }

    public function destroy($id)
    {
        $penulis = Penulis::find($id);
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'Penulis deleted successfully.');
    }
}

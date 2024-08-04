<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raks = Rak::all();
        return view('buku.create', compact('raks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'edisi' => 'required|string|max:255',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:255',
            'kd_penulis' => 'required|integer',
        ]);

        Buku::create($validated);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $raks = Rak::all();
        $buku = Buku::find($buku->no_buku);
        $penulis = Penulis::all();
        return view('buku.edit', compact('buku', 'raks', 'penulis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'edisi' => 'required|string|max:255',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:255',
            'kd_penulis' => 'required|integer',
        ]);

        $buku->update($validated);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Buku $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}

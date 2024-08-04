<?php

namespace App\Http\Controllers;

use App\Models\Sanksi;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class SanksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanksi = Sanksi::with(['anggota', 'peminjaman'])->get();
        return view('sanksi.index', compact('sanksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = Anggota::all();
        $peminjaman = Peminjaman::all();
        return view('sanksi.create', compact('anggota', 'peminjaman'));
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
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:Tunggakan,Lunas',
        ]);

        Sanksi::create($validated);

        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Sanksi $sanksi
     * @return \Illuminate\Http\Response
     */
    public function show(Sanksi $sanksi)
    {
        return view('sanksi.show', compact('sanksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Sanksi $sanksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanksi $sanksi)
    {
        $anggota = Anggota::all();
        $peminjaman = Peminjaman::all();
        return view('sanksi.edit', compact('sanksi', 'anggota', 'peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sanksi $sanksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanksi $sanksi)
    {
        $validated = $request->validate([
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:Tunggakan,Lunas',
        ]);

        $sanksi->update($validated);

        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Sanksi $sanksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanksi $sanksi)
    {
        $sanksi->delete();
        return redirect()->route('sanksi.index')->with('success', 'Sanksi berhasil dihapus.');
    }
}

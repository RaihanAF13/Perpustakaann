<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with('buku', 'anggota')->get();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        $bukus = Buku::all();
        $anggotas = Anggota::all();
        return view('peminjaman.create', compact('bukus', 'anggotas'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'no_buku' => 'required|integer|exists:buku,no_buku',
            'id_anggota' => 'required|integer|exists:anggota,id_anggota',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'required|date|after:tgl_peminjaman',
            'status' => 'required|in:Dipinjam,Dikembalikan',
        ]);

        $peminjaman = new Peminjaman();
        $peminjaman->no_buku = $request->no_buku;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->tgl_peminjaman = $request->tgl_peminjaman;
        $peminjaman->tgl_pengembalian = $request->tgl_pengembalian;
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman created successfully.');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);
        $bukus = Buku::all();
        $anggota = Anggota::find($peminjaman->id_anggota);
        return view('peminjaman.edit', compact('peminjaman', 'bukus', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_buku' => 'required|integer|exists:buku,no_buku',
            'id_anggota' => 'required|integer|exists:anggota,id_anggota',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'required|date|after:tgl_peminjaman',
            'status' => 'required|in:Dipinjam,Dikembalikan',
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman updated successfully.');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman deleted successfully.');
    }
}

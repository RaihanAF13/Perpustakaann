<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;

class RakController extends Controller
{
    public function index()
    {
        $rak = Rak::all();
        return view('rak.index', compact('rak'));
    }

    public function create()
    {
        return view('rak.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lokasi_rak' => 'required|string|max:150',
        ]);

        Rak::create($validatedData);

        return redirect()->route('rak.index')->with('success', 'Rak created successfully');
    }

    public function show($id)
    {
        $rak = Rak::findOrFail($id);
        return view('rak.show', compact('lokasi_rak'));
    }

    public function edit($id)
    {
        $rak = Rak::findOrFail($id);
        return view('rak.edit', compact('rak'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'lokasi_rak' => 'required|string|max:150',
        ]);

        $rak = rak::findOrFail($id);
        $rak->update($validatedData);

        return redirect()->route('rak.index')->with('success', 'Rak updated successfully');
    }

    public function destroy($id)
    {
        $rak = rak::findOrFail($id);
        $rak->delete();

        return redirect()->route('rak.index')->with('success', 'Rak deleted successfully');
    }
}

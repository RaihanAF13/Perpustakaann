<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanksi;

class SanksiController extends Controller
{
    public function edit($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        return view('sanksi.edit', compact('sanksi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        $sanksi = Sanksi::findOrFail($id);
        $sanksi->update($validatedData);

        return redirect()->route('sanksi.index')->with('success', 'Sanksi updated successfully');
    }

    public function destroy($id)
    {
        $sanksi = Sanksi::findOrFail($id);
        $sanksi->delete();

        return redirect()->route('sanksi.index')->with('success', 'Sanksi deleted successfully');
    }
}

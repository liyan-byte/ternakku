<?php

namespace App\Http\Controllers;

use App\Models\Pakan;
use Illuminate\Http\Request;

class PakanController extends Controller
{
    public function index()
    {
        $pakan = Pakan::all();
        return view('pakan.index', compact('pakan'));
    }

    public function create()
    {
        return view('pakan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pakan' => 'required',
            'stok_kg' => 'required|integer',
            'harga_per_kg' => 'required|numeric',
        ]);

        Pakan::create($request->all());
        return redirect()->route('pakan.index')->with('success', 'Data pakan berhasil ditambahkan.');
    }

    public function edit(Pakan $pakan)
    {
        return view('pakan.edit', compact('pakan'));
    }

    public function update(Request $request, Pakan $pakan)
    {
        $request->validate([
            'nama_pakan' => 'required',
            'stok_kg' => 'required|integer',
            'harga_per_kg' => 'required|numeric',
        ]);

        $pakan->update($request->all());
        return redirect()->route('pakan.index')->with('success', 'Data pakan berhasil diperbarui.');
    }

    public function destroy(Pakan $pakan)
    {
        $pakan->delete();
        return redirect()->route('pakan.index')->with('success', 'Data pakan berhasil dihapus.');
    }
}
